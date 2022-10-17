<?php

require_once 'start.php';

$id_fish = $_GET['id'];
$attr = new Attributes();
$attr->getById($id_fish);

$fish = new Fish();
$fish->getById($id_fish);

// $tier = new Tier();
// $tier->getAll();
// var_dump($tier);

$intelligence = $attr->getIntelligence();
$power = $attr->getPower();
$defense = $attr->getDefense();
$mobility = $attr->getMobility();
$hp = $attr->getHp();
$stealth = $attr->getStealth();
$total = $intelligence + $power + $defense + $mobility + $hp + $stealth;
?>

<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><?= $fish->getName() ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="graph">
                    <span><?= 'Inteligencia: ' . $intelligence ?></span><div class="fish_card" style="width:<?= $intelligence ?>% ;height:40px;background:hsl(<?= $intelligence ?>, 100%, 50%);"> </div><br>
                    <span><?= 'Poder: '        . $power        ?></span><div class="fish_card" style="width:<?= $power ?>%        ;height:40px;background:hsl(<?= $power ?>, 100%, 50%);">        </div><br>
                    <span><?= 'Defesa: '       . $defense      ?></span><div class="fish_card" style="width:<?= $defense ?>%      ;height:40px;background:hsl(<?= $defense ?>, 100%, 50%);">      </div><br>
                    <span><?= 'Mobilidade: '   . $mobility     ?></span><div class="fish_card" style="width:<?= $mobility ?>%     ;height:40px;background:hsl(<?= $mobility ?>, 100%, 50%);">     </div><br>
                    <span><?= 'Vida: '         . $hp           ?></span><div class="fish_card" style="width:<?= $hp ?>%           ;height:40px;background:hsl(<?= $hp ?>, 100%, 50%);">           </div><br>
                    <span><?= 'Furtividade: '  . $stealth      ?></span><div class="fish_card" style="width:<?= $stealth ?>%      ;height:40px;background:hsl(<?= $stealth ?>, 100%, 50%);">      </div><br>
                </div>
                <h4><?= "Total: $total" ?></h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
