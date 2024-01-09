<?php

namespace App\Table;

use \Core\Table\Table;

class ReservationTable extends Table
{

    public $reservation;

    public function getReservation()
    {
        $reservation =
            $this->query(
                'SELECT
    ntrhndmam_reservation.id as "id_reservation", 
    ntrhndmam_reservation._date as "reservation_date",
    ntrhndmam_reservation.horraire as "reservation_horraire",

    ntrhndmam_user.id as "id_user",
    ntrhndmam_user.nom as "user_nom",
    ntrhndmam_user.prenom as "user_prenom",

    ntrhndmam_avion.id as "id_avion",
    ntrhndmam_avion.modele as "avion_modele",

    ntrhndmam_pilote.id as "id_pilote",
    ntrhndmam_pilote.nom as "nom_pilote",
    ntrhndmam_pilote.prenom as "prenom_pilote"
FROM
    ntrhndmam_reservation,
    ntrhndmam_user,
    ntrhndmam_pilote,
    ntrhndmam_avion
WHERE
    ntrhndmam_reservation.id_1 = ntrhndmam_user.id AND ntrhndmam_reservation.id_2 = ntrhndmam_pilote.id AND ntrhndmam_reservation.id_3 = ntrhndmam_avion.id'

            );
        return $reservation;

        $this->_date = $reservation[0]->reservation_date;
        $this->horraire = $reservation[0]->reservation_horraire;

        $this->id_user = $reservation[0]->id_user;
        $this->user_nom = $reservation[0]->user_nom;
        $this->user_prenom = $reservation[0]->user_prenom;

        $this->id_avion = $reservation[0]->id_avion;
        $this->avion_modele = $reservation[0]->avion_modele;

        $this->id_pilote = $reservation[0]->id_pilote;
        $this->nom_pilote = $reservation[0]->nom_pilote;
        $this->prenom_pilote = $reservation[0]->prenom_pilote;
    }
    function getId_reservation()
    {
        return $this->id_reservation;
    }
    function getReservation_date()
    {
        return $this->reservation_date;
    }
    function getReservation_horraire()
    {
        return $this->reservation_horraire;
    }
    function getId_user()
    {
        return $this->id_user;
    }
}
