<div class="wrapper">
    <?php if(isset($args['SideNavbar'])) {echo $args['SideNavbar'];} ?>
    <div class="content p-5">
    
        <div>
            <h2 class="p-3">Ajouter Article</h2>
        </div>

        <div class="card text-left">
          <div class="card-body">
            <form class="new-article" action="<?=url('article/add')?>" method="POST" enctype="multipart/form-data">
              <input class="w-100" name="title" type="text" placeholder="title" required>
              <textarea class="w-100" name="description" type="text" placeholder="description" required></textarea>
              <br><br>
              <table class="table m-2">
                <h5 class="p-2">L'article concerne:</h5>
                <tbody>
                  <tr scope="row">
                    <td>Tous</td>
                    <td>Parents</td>
                    <td>Enseignats</td>
                    <td>Cycle Primaire</td>
                    <td>Cycle Moyen</td>
                    <td>Cycle Secondaire</td>
                  </tr>
                  <tr>
                    <td><input name="all" class="form-check-input" type="checkbox" value=""></td>
                    <td><input name="parent" class="form-check-input" type="checkbox" value=""></td>
                    <td><input name="teacher" class="form-check-input" type="checkbox" value=""></td>
                    <td><input name="primaire" class="form-check-input" type="checkbox" value=""></td>
                    <td><input name="moyen" class="form-check-input" type="checkbox" value=""></td>
                    <td><input name="secondaire" class="form-check-input" type="checkbox" value=""></td>
                  </tr>
                </tbody>
              </table>
              <input class="w-100 file-input" name="image" type="file" accept="image/*" placeholder="image" required>
              <button class="float-end my-btn my-btn-blue" type="submit" name="add_article" id="form-btn">Add Article</button>
            </form>
          </div>
        </div>
        
    </div>
</div>