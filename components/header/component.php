<style> 
    <?php include __DIR__.'/template.css'; ?> 
</style>
<div>
    <div class="headerContainer">
        <!-- Componente menuIcon -->
        <img src="/assets/Logo/cobeerLogo.png" height="80" alt="Cobeer Logo"/>
    </div> 
    <div>
        <?php include dirname(__DIR__, 1).'../../components/nav/component.php'?>
    </div>
    <div class="buscar">
        <?php include dirname(__DIR__, 1).'/buscador/component.php'?>
    </div>
</div>
