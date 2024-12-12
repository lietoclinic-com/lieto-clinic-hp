<form action="" method="get" id="voice-filter">
  <div class="p-pageVoice__searchTitle">性別</div>
  <div class="p-pageVoice__searchBtns">
    <?php
      $categories = get_terms(array(
        'taxonomy' => 'sex',
        'hide_empty' => false,
      ));
      foreach ( $categories as $category ):
    ?>
      <div 
        data-slug="<?php echo $category->slug;?>"
        value="<?php echo $category->slug; ?>"
        class="p-pageVoice__searchBtn<?php if(isset($term) && $term === $category->slug) echo ' selected';?>">
        <?php echo $category->name; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="p-pageVoice__searchTitle">年齢</div>
  <div class="p-pageVoice__searchCheckbox">
    <?php
      $example_ages = get_terms(array(
        'taxonomy' => 'age',
        'hide_empty' => false,
      ));
      foreach ( $example_ages as $example_age ):
    ?>
      <input 
      type="checkbox"
      class="ageCheckbox"
      name="age[]"
      id="<?php echo $example_age->slug; ?>"
      value="<?php echo $example_age->slug; ?>"
      <?php
        if(!empty($_GET['age'])) {
          $ages = $_GET['age'];
          foreach( $ages as $age ) {
            if($age === $example_age->slug) {
              echo 'checked';
            }
          }
        } 
      ?>>
      
      <label for="<?php echo $example_age->slug; ?>" class="checkbox__label<?php
        if(!empty($_GET['age'])) {
          $ages = $_GET['age'];
          foreach( $ages as $age ) {
            if($age === $example_age->slug) {
              echo ' selected';
            }
          }
        } ?>">
        
        <?php //if(isset($term) && $term === $category->slug) echo ' selected';?>
        <?php echo $example_age->name; ?>
      </label>
    <?php endforeach; ?>
  </div>
  <button type="submit" class="p-pageVoice__submit">検索する</button>
</form>
