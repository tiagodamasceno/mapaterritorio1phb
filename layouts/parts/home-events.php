<?php 

if(!$app->isEnabled('events')){
    return;
}

$class_event = 'MapasCulturais\Entities\Event';
$num_events             = $this->getNumEvents();
$num_verified_events    = $this->getNumVerifiedEvents();
$event_linguagens = array_values($app->getRegisteredTaxonomy($class_event, 'linguagem')->restrictedTerms);
sort($event_linguagens);

$event_img_attributes = 'class=""';

$event = $this->getOneVerifiedEntity($class_event);

if($event && $img_url = $this->getEntityFeaturedImageUrl($event)){
    $event_img_attributes = 'class="" style=""';
}

$url_search_events = $this->searchEventsUrl;

?>

<article id="home-events" class="js-page-menu-item home-entity clearfix">
    <div class="box">
        <div class="box-content">
            <h1>
                <a href="<?php if ($this->controller->action !== 'search') echo $app->createUrl('busca') . '##(global:(enabled:(event:!t),filterEntity:event))'; ?>">
                    <!--<span class="icon icon-event"></span>--> Ações</h1>
                </a>
            <div class="clearfix">
                <div class="statistics">
                    <div class="statistic"><?php echo $num_events ?></div>
                    <div class="statistic-label">ações agendadas</div>
                </div>
                <div class="statistics">
                    <div class="statistic"><?php echo $num_verified_events ?></div>
                    <div class="statistic-label">Ações da Secult</div>
                </div>
            </div>
            <p>Ação cultural é a parte mínima de um projeto cultural, continuado ou não, multidisciplinar ou setorial, que tenha objetivo definido e impacto imediato.</p>
            <!-- <h4>Encontre ações por</h4> -->
            <ul class="abas clearfix">
                <li class="active"><a href="#event-terms">Linguagem</a></li>
            </ul>
            <div id="event-terms" class="tag-box">
                <div>
                    <?php foreach ($event_linguagens as $i => $t): ?>
                        <a class="tag" href="<?php echo $app->createUrl('site', 'search') ?>##(event:(linguagens:!(<?php echo $i ?>)),global:(enabled:(event:!t),filterEntity:event))"><?php echo $t ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    
</article>
