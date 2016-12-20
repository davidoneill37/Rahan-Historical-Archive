<table id="storiestable">
           <tr>
               <th colspan="2">Stories of Rahan</th>
           </tr>
           <?php
               if($getStories->num_rows() >0)
               {
                   foreach($getStories->result() as $row)
                   {
                       ?>
                       <tr>
                           <td><?php echo $row->story; ?></td>
                       </tr>
                       <?php
                   }
               }
                   
                else
                {
                    ?>
                    <tr><td>No stories to display</td></tr>
                    <?php          
                }
               ?>
        </table>