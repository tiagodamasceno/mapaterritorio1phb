<section id="home-intro" class="js-page-menu-item home-entity clearfix">
    <div class="branding">
        <span class="tipo">Parnaíba</span>
       <!-- <h1>Seja bem vindo a Parnaíba-PI</h1>-->
        <p class="text">
           
        </p>
    </div>
    <div class="box">
        <form id="home-search-form" class="clearfix" ng-non-bindable>
            <h1>Busca culturais de Parnaíba</h1>
            <input tabindex="1" id="campo-de-busca" class="search-field" type="text" name="campo-de-busca" placeholder="Digite uma palavra-chave"/>
            
            <!--<div class="rota">
                <div class="rota1"></div>
                <div class="rota2"></div>
                <div class="view-more"><a class="hltip icon icon-select-arrow" href="#home-events" title="Saiba mais"></a></div>
            </div>-->
            
            <div id="home-search-filter" class="dropdown" data-searh-url-template="<?php echo $app->createUrl('site','search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}}),{{entity}}:(keyword:'{{keyword}}'))">
                <div class="placeholder"><span class="icon icon-search"></span> Buscar</div>
                
                
                
                
                
                
                
                
                
                <div class="submenu-dropdown">
                    <ul>
                        <?php if($app->isEnabled('events')): ?>
                            <li tabindex="2" id="events-filter"  data-entity="event"><span class="icon icon-event"></span> Ações</li>
                        <?php endif; ?>
                        
                        <?php if($app->isEnabled('agents')): ?>
                            <li tabindex="3" id="agents-filter"  data-entity="agent"><span class="icon icon-agent"></span> Agentes</li>
                        <?php endif; ?>
                        
                        <?php if($app->isEnabled('spaces')): ?>
                            <li tabindex="4" id="spaces-filter"  data-entity="space"><span class="icon icon-space"></span> <?php $this->dict('entities: Spaces') ?></li>
                        <?php endif; ?>
                        
                        <?php if($app->isEnabled('projects')): ?>
                            <!-- <li tabindex="5" id="projects-filter" data-entity="project" data-searh-url-template="<?php echo $app->createUrl('site','search'); ?>##(global:(enabled:({{entity}}:!t),filterEntity:{{entity}},viewMode:list),{{entity}}:(keyword:'{{keyword}}'))"><span class="icon icon-project"></span> Projetos</li> -->
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </form>
        <!-- <a class="btn btn-accent btn-large" href="<?php echo $app->createUrl('panel') ?>"><?php $this->dict('home: colabore') ?></a> -->
    </div>
    
  
</section>
<section id="home-intro" class="js-page-menu-item home-entity clearfix">  <div><p align="justify">Um rio, um delta, um mar, uma paisagem cultural atravessada por sons e
imagens, histórias e memórias que recriam gerações que guardam dentro de si
as tradições de um povo remanescente dos índios Tremembés, dos negros
africanos arrancados de sua terra de origem e dos brancos europeus.</p><p align="justify">
Elementos definidores de um lugar híbrido formado por famílias inteiras que
até hoje mantém hábitos e costumes ancestrais, destacando-se aquelas que
vivem da pesca artesanal, extrativismo do caranguejo e marisco, da
agricultura e artesanato em linha, madeira, palha e argila, junto a uma
vasta e rica expressão artística local - o território que descrevemos é o
Delta do Rio Parnaíba - o único a desaguar em mar aberto das Américas,
localizado na região Meio Norte do Brasil, estado do Piauí. </p><p align="justify">Esse é o
cenário singular que escolhemos para desenvolver o projeto *"Territori1"*,
um *Mapa Cultural *de natureza colaborativa fruto da parceria entre o
Instituto TIM, Prefeitura de Parnaíba, através da Superintendência de
Cultura, e a Universidade Federal do Piauí, por meio do Mestrado
Profissional em Artes, Patrimônio e Museologia, com o apoio do Ministério
da Cultura.</p>

<h2>Seja bem vind@ ao *Territori1*.</h2></div></section>