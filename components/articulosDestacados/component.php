<style>
    <?php include __DIR__ . '/template.css'; ?>
</style>
<?php include dirname(__DIR__, 1).'/header/component.php' ?>
<div>
  <ul class="cards">
    <li>
      <a href="" class="card">
        <img src="https://summitsoft.com/wp-content/uploads/2014/07/Blue-moon-beer-logo.jpg" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
            <div class="card__header-text">
              <h3 class="card__title">Articulo-1</h3>            
            </div>
          </div>
          <p class="card__description"><?php include dirname(__DIR__, 1).'/resumenArticulo/component.php' ?></p>
        </div>
      </a>      
    </li>

    <li>
      <a href="" class="card">
        <img src="https://summitsoft.com/wp-content/uploads/2014/07/Blue-moon-beer-logo.jpg" class="card__image" alt="" />
        <div class="card__overlay">        
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
            <div class="card__header-text">
              <h3 class="card__title">Articulo-2</h3>
            </div>
          </div>
          <p class="card__description"><?php include dirname(__DIR__, 1).'/resumenArticulo/component.php' ?></p>
        </div>
      </a>
    </li>

    <li>
      <a href="" class="card">
        <img src="https://summitsoft.com/wp-content/uploads/2014/07/Blue-moon-beer-logo.jpg" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
            <div class="card__header-text">
              <h3 class="card__title">Articulo-3</h3>         
            </div>
          </div>
          <p class="card__description"><?php include dirname(__DIR__, 1).'/resumenArticulo/component.php' ?></p>
        </div>
      </a>
    </li>
  </ul>
</div>
<?php include dirname(__DIR__, 1).'/footer/component.php' ?>

