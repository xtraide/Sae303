 <table class="table table-bordered  text-center ">

     <thead>
         <tr>

             <th scope="col">Nombre d'utilisateurs</th>
             <th scope="col">Nombre d'avions</th>
             <th scope="col">Nombre de pilotes</th>
             <th scope="col">Nombre d'reservation</th>
         </tr>
     </thead>
     <tbody>

         <tr>
             <th><?= $result->user ?></th>
             <td><?= $plane->avion ?></td>
             <td><?= $plane->pilote ?></td>
             <td><?= $plane->reservation ?></td>

         </tr>


     </tbody>
 </table>