<html>

<head>
   <title>Learning</title>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import materialize.css-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
   <div class="contain">

      <div class="row">
         <div class="col s12 m12">
            <div class="card-panel">
               <div class="card-content">
        <!-- create page -->
                  <span class="card-title activator grey-text text-darken-4">Learning<a class='right waves-effect waves-light btn-small modal-trigger' href="#modal1">create</a>
                     <div id="modal1" class="modal">
                        <div class="modal-content">
                           <div class="row">
                              <form class="col s12" action="<?php echo base_url('learningStore'); ?>" method="post">
                                 <div class="row">
                                    <h4>Create</h4>
                                    <div class="input-field col s12">
                                       <input id="first_name2" type="text" class="validate" name='title'>
                                       <label class="active" for="first_name2">Title</label>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="input-field col s12">
                                       <textarea id="textarea2" class="materialize-textarea" data-length="120" name='description'></textarea>
                                       <label for="textarea2">description</label>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class=" col s12">
                                       <button type='submit' class='btn'>Create</button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </span>
             <!-- end -->
                  <table>
                     <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>description</th>
                        <th>Action</th>
                     <tr>
                        <?php $c = 1; ?>
                        <?php foreach ($learning as $learnings) : ?>
                     <tr>
                        <td><?php echo $c++; ?></td>
                        <td><?php echo $learnings['title'];  ?></td>
                        <td><?php echo $learnings['description'];  ?></td>

                        <td>
                 <!-- view page -->
                           <button data-target="viewmodal <?php echo $learnings['id'];  ?>" class='btn indigo modal-trigger'>View</button>

                           <div id="viewmodal <?php echo $learnings['id'];  ?>" class="modal">
                              <div class="modal-content">
                                 <div class="row">
                                    <form class="col s12">
                                       <div class="row">
                                          <h4>view</h4>
                                          <div class="input-field col s12">
                                             <input id="first_name2" type="text" class="validate" name='title' readonly value='<?php echo $learnings['title'];  ?>'>
                                             <label class="active" for="first_name2">Title</label>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="input-field col s12">
                                             <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description" readonly><?php echo $learnings['description']; ?></textarea>
                                             <label for="textarea2">Description</label>
                                          </div>
                                       </div>
                                       <a href="<?php echo base_url('viewLearn/' . $learnings['id']); ?>">view data</a>
                                    </form>
                                 </div>
                              </div>
                           </div>
                     <!-- end -->

                   <!-- edit page -->
                           <button data-target="editmodal <?php echo $learnings['id'];  ?>" class='btn orange modal-trigger'>Edit</button>

                           <div id="editmodal <?php echo $learnings['id'];  ?>" class="modal">
                              <div class="modal-content">
                                 <div class="row">
                                    <form class="col s12" method="post" action="<?php echo base_url('learningupdate'); ?>">
                                       <div class="row">
                                          <h4>Edit</h4>
                                          <div class="input-field col s12">
                                             <input id="first_name2" type="text" class="validate" name='title' value='<?php echo $learnings['title'];  ?>'>
                                             <label class="active" for="first_name2">Title</label>
                                          </div>
                                       </div>

                                       <div class="row">
                                          <div class="input-field col s12">
                                             <textarea id="textarea2" class="materialize-textarea" data-length="120" name="description" readonly><?php echo $learnings['description']; ?></textarea>
                                             <label for="textarea2">Description</label>
                                          </div>
                                       </div>
                                       <input type="hidden" name="id" value="<?php echo $learnings['id'];  ?>">
                                       <div class='row'>
                                          <div class="col s12">
                                             <button type="submit" class="btn"> update</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                      <!-- end -->

                 <!-- delete page -->
                           <button data-target="deletemodal <?php echo $learnings['id'];  ?>" class='btn red modal-trigger'>Delete</button>

                           <div id="deletemodal <?php echo $learnings['id']; ?>" class="modal">
                              <div class="modal-content">
                                 <div class="row">
                                    <form class="col s12" method="post" action="<?php echo base_url('learningdelete'); ?>">
                                       <h4>Delete</h4>

                                       <div class="row">
                                          <div class="col s12">Are You Sure To Delete?</div>
                                       </div>
                                       <input type="hidden" name="id" value=" <?php echo $learnings['id'];  ?>">
                                       <div class='row'>
                                          <div class="col s12">
                                             <button type="submit" class="btn">Delete</button>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                     <!-- end  -->
                        </td>
                     </tr>
                  <?php endforeach; ?>

                  </table>

               </div>
            </div>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <!--JavaScript at end of body for optimized loading-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

   <script>
      $(document).ready(function() {
         $('.modal').modal();
      });
   </script>

</body>

</html>