<?php

namespace App\Table;

use \Core\Table\Table;

class ReservationTable extends Table
{

    public $reservation;

    public function all()
    {
        $reservation =
            $this->query(
                'SELECT
    ntrhndmam_reservation.id as "id_reservation", 
    ntrhndmam_reservation._date ,
    ntrhndmam_reservation.horraire ,
    ntrhndmam_reservation.Id_1,
    ntrhndmam_reservation.Id_2,
    ntrhndmam_reservation.Id_3,


    ntrhndmam_user.nom as "user_nom",
    ntrhndmam_user.prenom as "user_prenom",


    ntrhndmam_avion.modele as "avion_modele",

 
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
    }
    public  function find($id)
    {
        return $this->query(
            'SELECT
    ntrhndmam_reservation.id as "id_reservation", 
    ntrhndmam_reservation._date ,
    ntrhndmam_reservation.horraire ,
    ntrhndmam_reservation.Id_1,
    ntrhndmam_reservation.Id_2,
    ntrhndmam_reservation.Id_3,


    ntrhndmam_user.nom as "user_nom",
    ntrhndmam_user.prenom as "user_prenom",


    ntrhndmam_avion.modele as "avion_modele",

 
    ntrhndmam_pilote.nom as "nom_pilote",
    ntrhndmam_pilote.prenom as "prenom_pilote"
FROM
    ntrhndmam_reservation,
    ntrhndmam_user,
    ntrhndmam_pilote,
    ntrhndmam_avion
WHERE
    ntrhndmam_reservation.id_1 = ntrhndmam_user.id AND ntrhndmam_reservation.id_2 = ntrhndmam_pilote.id AND ntrhndmam_reservation.id_3 = ntrhndmam_avion.id AND ntrhndmam_reservation.id = ?;',
            [$id],
            true
        );
    }
}
