<?php
/**
 * Classe d'accès aux données
 *
 * Utilise les services de la classe PDO
 * pour l'application Wifi
 *
 * @author Alexandre PETITJEAN <petitjean.alexandre.pro@gmail.com>
 * @author Rayan BOUGOUFA <rayan.bougoufa.pro@gmail.com>
 * @author timothe LANGLOIS TESTON <timothe.langlois.teston@gmail.com>
 */

class PdoWifi
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=portefeuille';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoWifi = null;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct()
    {
        PdoWifi::$monPdo = new PDO(
            PdoWifi::$serveur . ';' . PdoWifi::$bdd,
            PdoWifi::$user,
            PdoWifi::$mdp
        );
        PdoWifi::$monPdo->query('SET CHARACTER SET utf8');
    }

    /**
     * @return null
     */
    public static function getPdoWifi()
    {
        if (PdoWifi::$monPdoWifi == null) {
            PdoWifi::$monPdoWifi = new PdoWifi();
        }
        return PdoWifi::$monPdoWifi;
    }

    /**
     * Méthode destructeur appelée dès qu'il n'y a plus de référence sur un
     * objet donné, ou dans n'importe quel ordre pendant la séquence d'arrêt.
     */
    public function __destruct()
    {
        PdoWifi::$monPdo = null;
    }

    /**
     * Retourne uniquement le mot de passe de l'etudiant
     *
     * @param String $login Login de l'etudiant
     * @return mixed
     */
    public function getInfosLigneEtudiant($login)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_etudiant.mdp AS mdp '
            . 'FROM port_etudiant '
            . 'WHERE port_etudiant.mel = :unLogin AND port_etudiant.valide = \'O\''
        );
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Retourne uniquement le mot de passe du professeur
     *
     * @param String $login Login du professeur
     * @return mixed
     */
    public function getInfosLigneProfesseur($login)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_professeur.mdp AS mdp '
            . 'FROM port_professeur '
            . 'WHERE port_professeur.mel = :unLogin AND port_professeur.valide = \'O\''
        );
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Retourne les informations d'un etudiant
     *
     * @param String $login Login de l'etudiant
     *
     * @return l'id, le nom et le prénom sous la forme d'un tableau associatif
     */
    public function getInfosEtudiant($login)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_etudiant.num AS id, port_etudiant.nom AS nom, '
            . 'port_etudiant.prenom AS prenom '
            . 'FROM port_etudiant '
            . 'WHERE port_etudiant.mel = :unLogin'
        );
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Retourne les information d'un professeur
     *
     * @param String $login Login du professeur
     *
     * @return l'id, le nom et le prénom sous la forme d'un tableau associatif
     */
    public function getInfosProfesseur($login)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_professeur.num AS id, port_professeur.nom AS nom, '
            . 'port_professeur.prenom AS prenom, port_professeur.niveau as niveau '
            . 'FROM port_professeur '
            . 'WHERE port_professeur.mel = :unLogin'
        );
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Requete qui récupere tous les étudiants avec leurs numéro, nom, prénom, mel.
     * @return mixed la liste de tous les étudiants
     */
    function getAllEtudiant()
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_etudiant.num AS num, port_etudiant.nom AS nom, port_etudiant.prenom AS prenom,'
            . ' port_etudiant.mel AS login '
            . 'FROM port_etudiant '
        );
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * Requete qui récupere tous les professeurs avec leurs numéro, nom, prénom, mel.
     * @return mixed la liste de tous les professeurs
     */
    function getAllProfesseur()
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_professeur.num AS num , port_professeur.nom AS nom, port_professeur.prenom AS prenom,'
            . ' port_professeur.mel AS login '
            . 'FROM port_professeur '
        );
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }


    function newEtudiant($numGroup, $nom, $prenom, $login, $mdp)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'INSERT INTO port_etudiant (num, numGroupe, nom, prenom, mel, mdp, numexam, valide) '
            . 'VALUES (NULL, :numGroup, :nom, :prenom, :unLogin, :mdp, NULL, \'O\')'
        );
        $requetePrepare->bindParam(':numGroup', $numGroup, PDO::PARAM_STR);
        $requetePrepare->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->execute();
    }


    function newProfesseur($nom, $prenom, $login, $mdp, $niveau)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'INSERT INTO port_professeur (num, nom, prenom, mel, mdp, niveau, valide) '
            . 'VALUES (NULL, :nom, :prenom, :unLogin, :mdp, :niveau, \'O\')'
        );
        $requetePrepare->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->bindParam(':niveau', $niveau, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    function modifEtudiant($num, $numGroup, $nom, $prenom, $login, $mdp)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'UPDATE port_etudiant SET port_etudiant.numgroup = :numGroup, '
            . 'port_etudiant.nom = :nom '
            . 'port_etudiant.prenom = :prenom '
            . 'port_etudiant.mel = :unLogin '
            . 'port_etudiant.mdp = :mdp '
            . 'WHERE port_etudiant.num = :num'
        );
        $requetePrepare->bindParam(':num', $num, PDO::PARAM_STR);
        $requetePrepare->bindParam(':numGroup', $numGroup, PDO::PARAM_STR);
        $requetePrepare->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    function modifProfesseur($num, $nom, $prenom, $login, $mdp, $niveau)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'UPDATE port_professeur SET port_professeur.nom = :nom '
            . 'port_professeur.prenom = :prenom '
            . 'port_professeur.mel = :unLogin '
            . 'port_professeur.mdp = :mdp '
            . 'WHERE port_professeur.num = :num'
        );
        $requetePrepare->bindParam(':num', $num, PDO::PARAM_STR);
        $requetePrepare->bindParam(':nom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLogin', $login, PDO::PARAM_STR);
        $requetePrepare->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->bindParam(':niveau', $niveau, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    /**
     * Requete qui met a jour le mdp de l'Etudiant
     * @param $num num du professeur dans la table.
     * @param $mdp mot de passe hasher.
     */
    function updateEtudiantMdp($num, $mdp)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'UPDATE port_etudiant SET mdp = :mdp WHERE port_etudiant.num = :num'
        );
        $requetePrepare->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->bindParam(':num', $num, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    /**
     * Requete qui met a jour le mdp du Professeur.
     * @param $num num du professeur dans la table.
     * @param $mdp mot de passe hasher.
     */
    function updateProfesseurMdp($num, $mdp)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'UPDATE port_professeur SET mdp = :mdp WHERE port_professeur.num = :num'
        );
        $requetePrepare->bindParam(':mdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->bindParam(':num', $num, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    function supprimerEtudiant($num)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'UPDATE port_etudiant SET port_etudiant.valide = \'N\' '
            . 'WHERE port_etudiant.num = :num'
        );
        $requetePrepare->bindParam(':num', $num, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    function supprimerProfesseur($num)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'UPDATE port_professeur SET port_professeur.valide = \'N\' '
            . 'WHERE port_professeur.num = :num'
        );
        $requetePrepare->bindParam(':num', $num, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    /**
     * Ajout d'un nouveau périphérique
     *
     * @param $id num de l'utilisateur.
     * @param $mac adresse mac du périphérique.
     * @param $description ex : pc portable, telephone, etc...
     * @param $etat etat du périphérique dans le reseau, actif = 1, inactif = 0.
     * Quand un périphérique est ajouté a la base, il est par defaut actif.
     * Si il est supprimé ou remplacé par un autre périphérique, il passe inactif.
     * @param $date date d'enregistrement dans la base de données.
     */
    public function nouveauPeripherique($id, $mac, $description, $etat, $date)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'INSERT INTO port_peripherique( port_peripherique.idutilisateur, port_peripherique.description, '
            . 'port_peripherique.adressemac, port_peripherique.etat, port_peripherique.datecreation) '
            . 'VALUES (:id , :description, :mac , :etat, :datecreation)'
        );
        $requetePrepare->bindParam(':id', $id, PDO::PARAM_STR);
        $requetePrepare->bindParam(':mac', $mac, PDO::PARAM_STR);
        $requetePrepare->bindParam(':description', $description, PDO::PARAM_STR);
        $requetePrepare->bindParam(':etat', $etat, PDO::PARAM_STR);
        $requetePrepare->bindParam(':datecreation', $date, PDO::PARAM_STR);

        $requetePrepare->execute();
    }

    /**
     * Supprimmer un périphérique
     * @param $id l'id du périphérique
     */
    public function supprimerPeripherique($id)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'DELETE FROM port_peripherique WHERE port_peripherique.id = :id'
        );
        $requetePrepare->bindParam(':id', $id, PDO::PARAM_STR);

        $requetePrepare->execute();
    }
    
        public function desacPeripherique($adressemacaremplacer)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
                 'UPDATE port_peripherique '
                . 'SET etat = 0 '
                . 'WHERE adressemac = :mac'
        );
        $requetePrepare->bindParam(':mac', $adressemacaremplacer, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    /**
     * Récupere tout les périphériques d'un utilisateur.
     * @param $id l'id de l'utilisateur
     * @return mixed un tableau associatif des périphérique de l'utilisateur
     */
    public function getTousLesPeripheriquesUtilisateur($id)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_peripherique.id, port_peripherique.description, port_peripherique.adressemac, '
            . 'port_peripherique.etat , port_peripherique.datecreation '
            . 'FROM port_peripherique WHERE port_peripherique.idutilisateur = :id'
        );
        $requetePrepare->bindParam(':id', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * Test si l'adresse mac en entrée existe deja dans la base de données.
     * @param $mac adresse mac
     * @return mixed
     */
    public function getPeripheriquesConcordants($mac)
    {
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_peripherique.adressemac '
            . 'FROM port_peripherique '
            . 'WHERE port_peripherique.adressemac = :mac '
        );
        $requetePrepare->bindParam(':mac', $mac, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Recupere tous les groupes de la table groupe.
     * @return mixed
     */
    public function getAllGroupe(){
        $requetePrepare = PdoWifi::$monPdo->prepare(
            'SELECT port_groupe.num, port_groupe.nom '
        . 'FROM port_groupe'
        );
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }
}
