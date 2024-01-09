<?php
  //SQL Connect
   $sqlpath = $_SERVER['DOCUMENT_ROOT'];
   $sqlpath .= "/sql-connect.php";
   include_once($sqlpath);

   //Header
   $pgtitle = 'Games - ';
   $headpath = $_SERVER['DOCUMENT_ROOT'];
   $headpath .= "/header.php";
   include_once($headpath);
   /*if ($loguser !== 'tarfuin') {
   echo ('<script>window.location.replace("/oops.php"); </script>');
 }*/
   ?>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
   <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">
   <div class="mainbox col-lg-10 col-xs-12 col-lg-offset-1">

     <!-- Page Header -->
     <div class="col-md-12 sidebartext" style="padding-left:0px; padding-right:0px;">
      <div class="col-sm-2" style="padding-left:0px; padding-right:0px;">
    <ul>
      <li onClick="showPanel('limgrave')">Limgrave</li>
      <li onClick="showPanel('liurna')">Liurna</li>
      <li onClick="showPanel('altus')">Altus</li>
      <li onClick="showPanel('caelid')">Caelid</li>
      <li onClick="showPanel('gelmir')">Mt. Gelmir</li>
      <li onClick="showPanel('leyndell')">Leyndell</li>
      <li onClick="showPanel('underground')">Underground</li>
      <li onClick="showPanel('giants')">Mountaintops of the Giants</li>
      <li onClick="showPanel('farum')">Crumbling Farum Azula</li>
    </ul>
</div>
<div class="col-md-10" style="padding-left:0px; padding-right:0px;">
  <div id="mainpanel">
</div>
<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="limgrave">
    <tr>
        <td>Soldier of Godrick</td>
        <td>Stranded Graveyard in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Torrent</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>First Steps site of grace in Limgrave</td>
        <td>(Optional) Speak to him initially at the First Steps site of grace</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Church of Elleh in Limgrave</td>
        <td>She will appear in this church as "Renna" after you receive Torrent from Melina (nighttime only). Speak to her and she will give you the Spirit Calling Bell and the Lone Wolf Ashes*</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Limgrave telescope</td>
        <td>Hiding inside of a tree nearby the Limgrave telescope, simply roll into the tree to reveal him, exaust his dialogue</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Coastal Cave in Limgrave</td>
        <td>He will be found laying next to the site of grace</td>
    </tr>
    <tr>
        <td>Demi-Human Chief</td>
        <td>Coastal Cave in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Coastal Cave in Limgrave</td>
        <td>Defeat the boss of the cave to retrieve the belongings of Boc, you may also do this prior to meeting Boc and sending him to the cave</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Coastal Cave in Limgrave</td>
        <td>Give the Boc his belongings and he will pledge his service to you</td>
    </tr>
    <tr>
        <td>Erdtree Burial Watchdog (1)</td>
        <td>Stormfoot Catacombs in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Beastman of Farum Azula (1)</td>
        <td>Groveside Cave in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Stonedigger Troll (1)</td>
        <td>Limgrave Tunnels in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Roderika</td>
        <td>Stormhill Shack in Limgrave</td>
        <td>She will be sitting inside the shack, speak to her and exaust all dialogue</td>
    </tr>
    <tr>
        <td>Grave Warden Duelist (1)</td>
        <td>Murkwater Catacombs in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Murkwater Cave in Limgrave</td>
        <td>Approach the Murkwater Cave and you will be invaded by Bloody Finger Nerijus, with Yura being summoned to help you</td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Murkwater Cave in Limgrave</td>
        <td>After defeating Nerijus, if Yura survived the fight he will be found further down the river under a ruin block, speak to him here</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Murkwater Cave in Limgrave</td>
        <td>Fight Patches and spare him when he surrenders to receive the Grovel For Mercy gesture</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>North of Mistwood Outskirts site of grace in Limgrave</td>
        <td>You can find him standing on top of a large ruin structure acting as a bridge. Speak to him and he will ask you to clear Fort Haight for him, accept his request</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>Fort Haight in Limgrave</td>
        <td>Defeat the Godrick Knight at the top of the fort</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>North of Mistwood Outskirts site of grace in Limgrave</td>
        <td>Speak to him after clearing the fort and he will move to the fort</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>Fort Haight in Limgrave</td>
        <td>Going back to the fort you will find several demi-humans are now inside and Kenneth at the top of the fortress. Speak to him and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Guardian Golem</td>
        <td>Highroad Cave in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Saintsbridge site of grace in Limgrave</td>
        <td>(Optional) Alexander will be stuck in a hole in the ground on the clifftop south of the Saintsbridge site of grace. Attack him until he pops out, then speak to him and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Black Knife Assassin (1)</td>
        <td>Deathtouched Catacombs in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Mad Pumpkin Head</td>
        <td>Waypoint Ruins in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Waypoint Ruins in Limgrave</td>
        <td>After defeating the Mad Pumpkin Head, Sellen's spectral body will grant you an offer, and if you accept she will offer you her wares</td>
    </tr>
    <tr>
        <td>Night's Cavalry (2)</td>
        <td>Agheel Lake North in Limgrave (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Tree Sentinel</td>
        <td>The First Step in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Seaside Ruins site of grace in Limgrave</td>
        <td>(Optional) Yura can initially be met under a ruined overpass next to the site of grace. Speak to him and he will warn you about the dragon in Agheel Lake to the north</td>
    </tr>
    <tr>
        <td>Flying Dragon Agheel</td>
        <td>Dragon-Burnt Ruins in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Seaside Ruins site of grace in Limgrave</td>
        <td>(Optional) Defeat Flying Dragon Agheel in in the lake and return to Yura who will congratulate you</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Summonwater Village in Limgrave</td>
        <td>(Optional) You can find D, Hunter of the Dead kneeling over a corpse by the road west of the village, speak with him</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Summonwater Village in Limgrave</td>
        <td>Kill the Tibia Mariner boss</td>
    </tr>
    <tr>
        <td>Tibia Mariner (1)</td>
        <td>Summonwater Village in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Mistwood Ruins in Limgrave</td>
        <td>Head to the Mistwood Ruins and wait until you hear howling</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Church of Elleh in Limgrave</td>
        <td>After you've heard the howling, travel to the Church of Elleh and speak to the merchant Kalé, who will give you the Snap gesture and tell you to use it near the howling</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Mistwood Ruins in Limgrave</td>
        <td>Travel back to the ruins and use the Snap gesture nearby the tower and Blaidd will drop down and ask you to help him kill the Forlorn Hound</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Forlorn Hound Evergael in Limgrave</td>
        <td>Summon Blaidd and defeat the Forlorn Hound, after the fight talk to Blaid and he will thank you and tell you to mention him to War Counselor Iji in Liurnia</td>
    </tr>
    <tr>
        <td>Bloodhound Knight Darriwil</td>
        <td>Forlorn Hound Evergaol in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Crucible Knight</td>
        <td>Stormhill Evergaol in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Warmaster's Shack in Limgrave</td>
        <td>(Optional) You can initially meet Bernahl at the Warmaster's Shack. If you speak to him he will offer you his wares</td>
    </tr>
    <tr>
        <td>Bell Bearing Hunter (1)</td>
        <td>Warmaster's Shack in Limgrave (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Deathbird (1)</td>
        <td>Warmaster's Shack in Limgrave (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Ulcerated Tree Spirit (1)</td>
        <td>Fringefolk Hero's Grave in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Margit, the Fell Omen</td>
        <td>Castleward Tunnel in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Castleward Tunnel site of grace in Limgrave</td>
        <td>Defeat Margit, the Fell Omen and accept Melina's invitation to the Roundtable Hold</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Roundtable Hold</td>
        <td>Visit the Roundtable Hold at least one time</td>
    </tr>
    <tr>
        <td>Erdtree Burial Watchdog (2)</td>
        <td>Impaler's Catacombs in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Runebear</td>
        <td>Earthbore Cave in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Night's Cavalry (1)</td>
        <td>Castle Morne Rampart in Weeping Peninsula (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Deathbird (2)</td>
        <td>Castle Morne Rampart in Weeping Peninsula (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Irinia</td>
        <td>Bridge of Sacrifice site of grace in Weeping Peninsula</td>
        <td>Irinia can be found sitting by the road nearby the site of grace, speak with her and receive Irina's Letter</td>
    </tr>
    <tr>
        <td>Cemetery Shade (1)</td>
        <td>Tombsward Catacombs in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Erdtree Avatar (1)</td>
        <td>Minor Erdtree (Weeping Peninsula) in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Scaly Misbegotten</td>
        <td>Morne Tunnel in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Miranda the Blighted Bloom</td>
        <td>Tombsward Cave in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Ancient Hero of Zamor (1)</td>
        <td>Weeping Everegaol in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Irinia</td>
        <td>Castle Morne in Weeping Peninsula</td>
        <td>Locate her father Edgar in the upper ramparts of the castle and deliver the letter to him, he will decline to return to his daughter</td>
    </tr>
    <tr>
        <td>Irinia</td>
        <td>Castle Morne in Weeping Peninsula</td>
        <td>Defeat Leonine Misbegotten, and return to Edgar, who will thank the player and return to his daughter</td>
    </tr>
    <tr>
        <td>Leonine Misbegotten</td>
        <td>Castle Morne in Weeping Peninsula</td>
        <td></td>
    </tr>
    <tr>
        <td>Irinia</td>
        <td>Bridge of Sacrifice site of grace in Weeping Peninsula</td>
        <td>Irinia will be found dead next to the road with Edgar kneeling over her body, exaust his dialogue</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Secluded Cell site of grace in Limgrave</td>
        <td>Rogier can be found in chapel past the Rampart Tower site of grace, exaust his dialogue</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Stormveil Castle in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Roderika</td>
        <td>Stormveil Castle in Limgrave</td>
        <td>Aquire the Chrysalid's Memento from the room with the pile of corpses nearby the room containing a Grafted Scion</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Stormveil Castle in Limgrave</td>
        <td>(Optional) Defeat the Lesser Ulcerated Tree Spirit in the crypt of Stormveil Castle and examine Rogier's bloodstain near the rotting face</td>
    </tr>
    <tr>
        <td>Godrick the Grafted</td>
        <td>Stormveil Castle in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Stormveil Castle in Limgrave</td>
        <td>Kill Godrick the Grafted (or any other Great Rune boss)</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Sormveil Castle in Limgrave</td>
        <td>Defeat Godrick the Grafted</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Stormveil Castle in Limgrave</td>
        <td>Defeat Godrick, and Rogier will move to the Roundtable Hold</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Lake-Facing Cliffs site of grace in Liurnia</td>
        <td>After resting at the Lake-Facing Cliffs site of grace, Boc will appear and offer garmet alteration services to you at several different sites of grace*</td>
    </tr>
    <tr>
        <td>Thops</td>
        <td>Church of Irith in Liurnia</td>
        <td>Speak to him at the church and he will request a Glintstone Academy Key</td>
    </tr>
    <tr>
        <td>Roderika</td>
        <td>Stormhill Shack in Limgrave</td>
        <td>Give the Chrysalids' Memento to Roderika to receive a Golden Seed*</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>First Steps site of grace in Limgrave</td>
        <td>(Optional) After defeating Godrick the Grafted, speak to Varré and he will tell you to meet the Two Fingers in Roundtable Hold</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Roundtable Hold</td>
        <td>Speak to Enia in the Two Fingers chamber</td>
    </tr>
    <tr>
        <td>Roderika</td>
        <td>Roundtable Hold</td>
        <td>She will move to the Roundtable Hold and stand by the fireplace, speak to her and Master Hewg several times, and then reload the area</td>
    </tr>
    <tr>
        <td>Roderika</td>
        <td>Roundtable Hold</td>
        <td>She will now be located in the same room as Master Hewg, and will offer spirit tuning services to you</td>
    </tr>
    <tr>
        <td>Ensha</td>
        <td>Roundtable Hold</td>
        <td>Interact with Ensha, who is leaning against the wall in the Roundtable Hold to receive the What Do You Want? gesture</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Roundtable Hold</td>
        <td>Speak to Diallos in the main room and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Roundtable Hold</td>
        <td>Speak with Brother Corhyn and exaust his dialogue</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Roundtable Hold</td>
        <td>After defeating the Tibia Mariner boss he will move to the Roundtable Hold, if you speak to him and show him the Deathroot he will tell you to go to the Beastial Sanctum</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Roundtable Hold</td>
        <td>After defeating Godrick, regardless of whether she helped you or not, she will move to the Roundtable Hold, exaust her dialgue</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Roundtable Hold</td>
        <td>(Optional) Speak with Rogier and ask about the face</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Roundtable Hold</td>
        <td>(Optional) Speak with Fia and allow her to hold you. Choose the "Talk in secret", "Did you know?", and "About the Black Knifeprint" options</td>
    </tr>
    <tr>
        <td>Roderika</td>
        <td>Stormveil Castle in Limgrave</td>
        <td>After Roderika moves to Roundtable Hold, go back to the room with the pile of corpses to find the Crimson Hood</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Beastial Sanctum in Caelid</td>
        <td>Go to the marker he gives you on your map and you will find a teleporter to the Beastial Sanctum, where you can then speak to Gurranq and give him a Death Root.</td>
    </tr>
    <tr>
        <td>Gurranq Beast Clergyman</td>
        <td>Beastial Sanctum in Caelid</td>
        <td>Speak to him and offer him a Deathroot to receive the Clawmark Seal and the Beast Eye</td>
    </tr>
</table>
<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="liurna">
    <tr>
        <td>Cleanrot Knight</td>
        <td>Stillwater Cave in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Adan, Thief of Fire</td>
        <td>Malefactor's Evergaol in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Erdtree Burial Watchdog (3)</td>
        <td>Cliffbottom Catacombs in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Tibia Mariner (2)</td>
        <td>Artist's Shack in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Night's Cavalry (4)</td>
        <td>Gate Town Bridge in Liurnia (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Jar-Bairn</td>
        <td>Jarburg in Liurnia</td>
        <td>Jar-Bairn can be found sitting on the doorstep of one of the buildings. Speak to him and exaust his dialogue, then reload the area</td>
    </tr>
    <tr>
        <td>Jar-Bairn</td>
        <td>Jarburg in Liurnia</td>
        <td>Speak to him again and exaust his dialogue, then reload the area again</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Scenic Isle site of grace in Liurnia</td>
        <td>After reaching Liurnia, Patches will move to the Scenic Isle site of grace and continue to offer his wares</td>
    </tr>
    <tr>
        <td>Deathbird (3)</td>
        <td>Scenic Isle in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Gazebo near the Liurnia telescope</td>
        <td>Speak to Rya and she will ask you to find who took her necklace and get it back for her</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Gazebo near the Liurnia telescope</td>
        <td>Start Rya's questline</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Boilprawn Shack in Liurnia</td>
        <td>Purchase the necklace from Boggart for 1000 runes</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Boilprawn Shack in Liurnia</td>
        <td>Purchase Boiled Prawns from him</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Boilprawn Shack in Liurnia</td>
        <td>Speak to Blackguard Big Boggart and either buy the necklace from him or kill him for it</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Gazebo near the Liurnia telescope</td>
        <td>Return the necklace to Rya and she will give you an invitation to the Volcano Manor</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Rose Church in Liurnia</td>
        <td>Speak to Varré outside the entrance of the Rose Church and he will give you some Festering Bloody Finger</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Rose Church in Liurnia</td>
        <td>Perform 3 invasions using the Festering Bloody Fingers he gave you (doesn't matter if the invasions are successful or not)</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Rose Church in Liurnia</td>
        <td>After performing 3 invasions he will ask if you would like to join his order with the Bloody Lord</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Rose Church in Liurnia</td>
        <td>If you accept, he will give you the Lord of Blood's Favor item, and request that you soak it in the blood of a maiden</td>
    </tr>
    <tr>
        <td>Bloodhound Knight</td>
        <td>Lakeside Crystal Cave in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Latenna</td>
        <td>Slumbering Wolf's Shack in Liurnia</td>
        <td>Latenna can be found at the Slumbering Wolf's Shack, speak with her here (if you aquire the left half of the Haligtree medallion before speaking to her she will be dead here)</td>
    </tr>
    <tr>
        <td>Glintstone Dragon Smarag</td>
        <td>Temple Quarter in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Crystalian Spear &amp; Crystalian Staff</td>
        <td>Academy Crystal Cave in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Death Rite Bird (1)</td>
        <td>Gate Town North in Liurnia (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Academy Gate Town site of grace in Liurnia</td>
        <td>Diallos will next be found kneeling over the corpse of his friend on the roof of a sunken building north of the site of grace. Speak with him and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Crystalian Ringblade</td>
        <td>Raya Lucaria Crystal Tunnel in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Red Wolf of Radagon</td>
        <td>Debate Hall in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Rennala, Queen of the Full Moon</td>
        <td>Raya Lucaria Academy in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Academy of Raya Lucaria in Liurnia</td>
        <td>On the bridge north of the academy you'll find a red sign on the ground that you can use to assist Yura.</td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Academy of Raya Lucaria in Liurnia</td>
        <td>Defeat the Bloody Finger Ravenmount Assassin and speak to Yura to receive the Ash of War: Raptor</td>
    </tr>
    <tr>
        <td>Thops</td>
        <td>Academy of Raya Lucary in Liurnia</td>
        <td>Enter the academy and aquire an extra key from the rooftop area</td>
    </tr>
    <tr>
        <td>Thops</td>
        <td>Church of Irith in Liurnia</td>
        <td>Give the spare key to him and he will move to the academy</td>
    </tr>
    <tr>
        <td>Thops</td>
        <td>Schoolhouse Classroom site of grace in Liurnia</td>
        <td>Outside of the site of grace room you will find his body in a chair and can loot his various belongings</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Roundtable Hold</td>
        <td>(Optional) After entering the Academy of Raya Lucaria, return to the Roundtable Hold and speak to Corhyn. He will say that he is thinking of leaving to find the Goldmask</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Roundtable Hold</td>
        <td>Return to the Roundtable Hold to find Diallos back in his old spot, speak to him and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Bell Bearing Hunter (2)</td>
        <td>Church of Vows in Liurnia (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Church of Vows in Liurnia</td>
        <td>Aquire the Gold Sewing Needle</td>
    </tr>
    <tr>
        <td>Erdtree Avatar (2)</td>
        <td>Minor Erdtree (Liurnia Southwest) in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Black Knife Assassin (2)</td>
        <td>Black Knife Catacombs in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Black Knife Catacombs in Liurnia</td>
        <td>Defeat the Black Knight Assassin behind the hidden wall in the catacombs for the Black Knifeprint</td>
    </tr>
    <tr>
        <td>Cemetery Shade (2)</td>
        <td>Black Knife Catacombs in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Church of Inhibition, or The Four Belfries in Liurnia</td>
        <td>You can find the body of a maiden inside the Church of Inhibition, or inside the Church of Anticipation, accessed through the second belfry at The Four Belfries</td>
    </tr>
    <tr>
        <td>Night's Cavalry (3)</td>
        <td>East Raya Lucaria Gate in Liurnia (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Rose Church in Liurnia</td>
        <td>After soaking the cloth in blood, return to Varre and he will welcome you into the order and give you the Pureblood Knight's Medal</td>
    </tr>
    <tr>
        <td>Dragonkin Soldier of Nokstella</td>
        <td>Nokstella, Eternal City in Ainsel River</td>
        <td></td>
    </tr>
    <tr>
        <td>Latenna</td>
        <td>Village of the Albinaurics in Liurnia</td>
        <td>Speak to Albus who is hiding in a jar in the upper level of the village to receive the Haligtree Secret Medallion (Right)</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Village of the Albinaurics in Liurnia</td>
        <td>After she leaves the Roundtable Hold you'll find her outside of the Village of the Albinaurics kneeling over several corpses. Speak to her</td>
    </tr>
    <tr>
        <td>Omenkiller</td>
        <td>Village of the Albinaurics in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Village of the Albinaurics in Liurnia</td>
        <td>Defeat the Omenkiller in the village</td>
    </tr>
    <tr>
        <td>Latenna</td>
        <td>Slumbering Wolf's Shack in Liurnia</td>
        <td>Bring the medallion to Latenna, who will ask the player to take her to Haligtree. Accept and she will give you her spirit</td>
    </tr>
    <tr>
        <td>Ensha</td>
        <td>Slumbering Wolf's Shack in Liurnia</td>
        <td>Aquire the Haligtree Secret Medallion (Right) from Latenna's questline</td>
    </tr>
    <tr>
        <td>Ensha</td>
        <td>Roundtable Hold</td>
        <td>After aquiring the medallion, return to the Roundtable Hold and Ensha will invade you</td>
    </tr>
    <tr>
        <td>Ensha</td>
        <td>Roundtable Hold</td>
        <td>Defeat Ensha to find the Royal Remains set where he used to stand</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Roundtable Hold</td>
        <td>Return to the Roundtable Hold to and speak to Nepheli, who is now at the bottom of the stairs next to the blacksmith</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Roundtable Hold</td>
        <td>Speak to Gideon Ofnir and ask him about Nepheli</td>
    </tr>
    <tr>
        <td>Spirit-Caller Snail (1)</td>
        <td>Road's End Catacombs in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Erdtree Avatar (3)</td>
        <td>Minor Erdtree (Liurnia Northwest) in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Bols, Carian Knight</td>
        <td>Cuckoo's Evergaol in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td></td>
        <td>Use an Imbued Stonesword Key on the second Belfry to activate the teleporter to the Chapel of Anticipation</td>
    </tr>
    <tr>
        <td>Grafted Scion</td>
        <td>Chapel of Anticipation in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Chapel of Anticipation in Limgrave</td>
        <td>Kill the Grafted Scion and then head up to the chapel and loot The Stormhawk King spirit from the coprse on the roof</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Roundtable Hold</td>
        <td>If you haven't already, complete Roderika's questline</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Roundtable Hold</td>
        <td>Speak to Nepheli, and give her The Stormhawk King spirit</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>Roundtable Hold</td>
        <td>Progress Nepheli Loux's questline to the point where you have given her The Stormhawk King spirit</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>North of Mistwood Outskirts site of grace in Limgrave</td>
        <td>Progress Kenneth Haight's questline to the point where you have spoken to him at Fort Haight</td>
    </tr>
    <tr>
        <td>Royal Revenant</td>
        <td>Kingsrealm Ruins in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Royal Knight Loretta</td>
        <td>Caria Manor in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Glintstone Dragon Adula - Part 1</td>
        <td>Cathedral of Manus Celes in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>After speaking to her or missing her first encounter entirely, she will move to Ranni's Rise in Liurnia</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>If you are doing Rogier's questline then she will tell you she doesn't have the cursemark and asks you to leave, otherwise skip to step 5</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Roundtable Hold</td>
        <td>Give the Black Knifeprint to Rogier and reload the area</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Roundtable Hold</td>
        <td>Speak to Rogier again and he will ask you to seek out Ranni</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Roundtable Hold</td>
        <td>Go back to Rogier and tell him what she said and he will suggest for you to enter her service</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Speak with Ranni, then return and speak with Rogier again before going back to Ranni again to enter her service</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Return to Ranni and offer to join her cause, she will accept and ask to speak to her three other associates</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Three npcs will spawn in her tower, all of which must be spoken to before speaking to Ranni again, who will then tell you to retrieve the "hidden treasure of Nokron" for her</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Start Ranni's questline and Blaidd will appear in her tower. Speak to him and he will move to the Siofra River</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Speak to Preceptor Seluvis in his rise after starting Ranni's questline (must have spoken to Nepheli at least once prior)</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Seluvis will give you a potion and ask that you give it to Nepheli Loux</td>
    </tr>
    <tr>
        <td>Alabaster Lord</td>
        <td>Royal Grave Evergaol in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Magma Wyrm Makar</td>
        <td>Ruin-Strewn Precipice in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Irinia</td>
        <td>Revenger's Shack in Liurnia</td>
        <td>Travel to the Revenger's Shack to be invaded by Edgar, defeat him for his armor set and a Shabriri Grape</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Lake-Facing Cliffs site of grace in Liurnia</td>
        <td>Speak to her at the site of grace and offer her a Shabriri Grape to receive the As You Wish gesture. (You must complete Irinia's questline for her to appear here)</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Purified Ruins in Liurnia</td>
        <td>Head to the Purified Ruins in Liurnia, here you will find a second Shabriri Grape down a set of stairs hidden under a wooden floor</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Purified Ruins in Liurnia</td>
        <td>You will also find Hyetta here, on the edge of the ruins facing the lake. She will ask for another Shabriri Grape, give one to her</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Revenger's Shack in Liurnia</td>
        <td>If you haven't yet completed the last step of Irinia's questline, travel to the Revenger's Shack to be invaded by Edgar to receive the third Shabriri Grape</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Gate Town Bridge in Liurnia</td>
        <td>She will move again nearby the Gate Town Bridge site of grace and ask for the third Shabriri Grape. Give it to her and then tell her the grapes really are</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Gate Town Bridge in Liurnia</td>
        <td>Rest at the site of grace and speak with her again</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Bellum Church in Liurnia</td>
        <td>She will then move again to the Bellum Church where she will ask for a Fingerprint Grape. (Dropped by Festering Fingerprint Vyke at the nearby Church of Inhibition)</td>
    </tr>
    <tr>
        <td>Gurranq Beast Clergyman</td>
        <td>Beastial Sanctum in Caelid</td>
        <td>Give him three more Deathroot to receive additional items, and then reload the area</td>
    </tr>
    <tr>
        <td>Gurranq Beast Clergyman</td>
        <td>Beastial Sanctum in Caelid</td>
        <td>After giving him a total of four Deathroot, he will be hostile to you. After reducing his health to about 90% he will relent and go back to normal</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Siofra River Bank site of grace in Lower Siofra River</td>
        <td>Blaidd will appear in the Siofra River on the cliff next to the super jump cyclone that is directly east of the Siofra River Bank site of grace</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Siofra River Bank site of grace in Lower Siofra River</td>
        <td>Speak to him and he will inform you of his troubles in reaching Nokron and tell you that Seluvis might know something</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Siofra River Bank site of grace in Lower Siofra River</td>
        <td>(Optional) Meet Blaidd in the Siofra River and speak to him. He will inform you of his troubles in reaching Nokron and tell you that Seluvis might know something</td>
    </tr>
    <tr>
        <td>Ancestor Spirit</td>
        <td>Hallowhorn Grounds in Lower Siofra River</td>
        <td></td>
    </tr>
    <tr>
        <td>Dragonkin Soldier (1)</td>
        <td>Siofra River East Waygate in Lower Siofra River</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>(Optional) Speak to Seluvis and he will tell you to speak with Sorceress Sellen about it and hands you Seluvis's Introduction to give to her</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Waypoint Ruins in Limgrave</td>
        <td>(Optional) Speak to Sellen and give her the introduction and she will state that you must defeat Starscourge Radahn in order to reveal the entrance to Nokron</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Siofra River Bank site of grace in Lower Siofra River</td>
        <td>(Optional) Report back to Blaidd and he will ask that you meet him at Redmane Castle to help kill Starscourge Radahn</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Roundtable Hold</td>
        <td>After entering Ranni's service, inform Rogier and he will fall into a deep slumber</td>
    </tr>
    <tr>
        <td>Rogier</td>
        <td>Roundtable Hold</td>
        <td>Progress further and eventually Rogier will die and leave behind his armor set and a letter informing the player of D's twin brother</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Roundtable Hold</td>
        <td>Speak to Godeon Ofnier and tell him about the potion. He will tell you to either give it to him to be disposed of, or do what you will with it</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Roundtable Hold</td>
        <td>If you choose not to give it to Godeon, then you can either give the potion to Nepheli or the Dung Eater in the sewers of Leyndell*</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Regardless which of the three you give the potion to, return to Seluvis afterward and he will thank you and offer his wares</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>In the ruins outside of Ranni's Rise lies Seluvis's laboratory under an illusory floor. Interact with Seluvis's message at the back corner</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Speak to Seluvis about this chamber and he will allow you to choose one of his puppet spirits for free, with the others available to purchase </td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Purchase all of his puppets (if he does not sell his puppet spirits yet you will need to acquire another Starlight Shard for him to update)</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Speak to him afterward and he will tell you of his plot to turn Ranni into a doll. He will then ask you to retrieve the Amber Starlight for him</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Speak to Seluvis and he will tell you to speak with Sorceress Sellen about it and hands you Seluvis's Introduction to give to her</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Waypoint Ruins in Limgrave</td>
        <td>Speak to Sellen and give her the introduction and she will state that you must defeat Starscourge Radahn in order to reveal the entrance to Nokron</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Siofra River Bank site of grace in Lower Siofra River</td>
        <td>Report back to Blaidd and he will ask that you meet him at Redmane Castle to help kill Starscourge Radahn</td>
    </tr>
</table>  


<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="caelid">
    <tr>
        <td>Magma Wyrm (1)</td>
        <td>Gael Tunnel in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Gael Tunnel in Caelid</td>
        <td>(Optional) Clear the Gael Tunnel and open the door at the end. Alexander will be behind it, speak to him</td>
    </tr>
    <tr>
        <td>Erdtree Avatar (4)</td>
        <td>Minor Erdtree (Caelid) in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Erdtree Burial Watchdog (4)</td>
        <td>Minor Erdtree Catacombs in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Mad Pumpkin Head (Duo)</td>
        <td>Caelem Ruins in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Frenzied Duelist</td>
        <td>Gaol Cave in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Decaying Ekzykes</td>
        <td>Caelid Highway South in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Cemetery Shade (3)</td>
        <td>Caelid Catacombs in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Night's Cavalry (5)</td>
        <td>Caelid Highway South in Caelid (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Death Rite Bird (2)</td>
        <td>Southern Aeonia Swamp Bank in Caelid (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Speak to Gowry in his shack and he will ask you to find the Unalloyed Gold Needle in the nearby swamp</td>
    </tr>
    <tr>
        <td>Commander O'Neil</td>
        <td>Heart of Aeonia in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Heart of Aeonia in Caelid</td>
        <td>Defeat Commander O'Neil in the Heart of Aeonia found in the center of the mass of growth in the swamp to aquire the needle</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Heart of Aeonia in Caelid</td>
        <td>(Optional) You can approach the area in the center-left of the swamp to be invaded by Millicent.</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Give the needle to Gowry and exaust his dialogue. Then reload the area</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Speak to Gowry again and he will tell you to take the needle to Millicent at the Church of the Plague.</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Church of the Plague in Caelid</td>
        <td>Give the needle to Millicent, exaust her dialogue. Then reload the area and speak to her again to receive the Prosthesis-Wearer Heirloom</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Return to Gowry's Shack and inform Gorwy that the deed has been done. He will then offer his wares to you</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Reload the area and go back to Gowry's Shack and you'll find Millicent there. Exaust her dialogue and reload the area again</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Complete Gowry's questline up to the point where Millicent leaves Caelid</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>After reloading the area, Gowry will be back in his chair selling his wares as before</td>
    </tr>
    <tr>
        <td>Nox Swordstress &amp; Nox Priest</td>
        <td>Sellia, Town of Sorcery in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Fallingstar Beast (1)</td>
        <td>Sellia Crystal Tunnel in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Cleanrot Knight (Duo)</td>
        <td>Abandoned Cave in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Battlemage Hugues</td>
        <td>Sellia Evergaol in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Putrid Crystalian Trio</td>
        <td>Sellia Hideaway in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Starscourge Radahn</td>
        <td>Redmane Castle in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Redmane Castle in Caelid</td>
        <td>Defeat Starscourge Radahn</td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Redmane Castle in Caelid</td>
        <td>Fight Starscourge Radahn, making sure to summon Alexander during the fight. After defeating Radahn, Alexander can be found near the site of grace, speak to him and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Redmane Castle in Caelid</td>
        <td>Defeat Starscourge Radahn</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Redmane Castle in Caelid</td>
        <td>Defeat Starscourge Radahn</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Redmane Castle in Caelid</td>
        <td>After defeating Radahn, go back to the church right before the elevator leading to his arena and speak to Witch Hunter Jerren and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>South Mistwood in Limgrave</td>
        <td>After Radahn is defeated, the southern portion of Mistwood will be a giant open crater that leads down into Nokron</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Forlorn Hound Evergael in Limgrave</td>
        <td>After defeating Radahn, travel to the Forlorn Hound Evergael to find Blaidd, who is trapped inside. Interact with the evergaol to free him, and then speak with him</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Roundtable Hold</td>
        <td>Buy at least one piece of alterable demi-god boss armor from Finger Reader Enia (2 Great Runes must be acquired for her to sell boss armor)**</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>East Raya Lucaria site of grace in Liurnia</td>
        <td>(Optional) Rest at the East Raya Lucaria Gate site of grace and Boc will appear. Speak to Melina and she will comment on Boc</td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Carian Study Hall, Liurnia</td>
        <td>(Optional) He will be stuck in another hole to the south of the Carian Study Hall, use oil pots on him and then heavy attack him until he is free. After freeing him, speak to him</td>
    </tr>
</table>




<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="altus">
    <tr>
        <td>Rya</td>
        <td>Grand Lift of Dectus in Altus Plateau</td>
        <td>Speak to Rya here and she will teleport  you to the Volcano Manor (if you haven't gotten the medallion pieces yet she will be at Lux Ruins)</td>
    </tr>
    <tr>
        <td>Ancient Dragon Lansseax - Part 1</td>
        <td>Abandoned Coffin-&gt;Rampartside Path in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Perfumer Tricia &amp; Misbegotten Warrior</td>
        <td>Unsightly Catacombs in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Godefroy The Grafted</td>
        <td>Golden Lineage Evergaol in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Night's Cavalry (7)</td>
        <td>Altus Highway Junction in Altus Plateau (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Demi-Human Queen Gilika</td>
        <td>Lux Ruins in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Tibia Mariner (3)</td>
        <td>Wyndham Ruins in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Necromancer Garris</td>
        <td>Sage's Cave in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Black Knife Assassin (3)</td>
        <td>Sage's Cave in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Erdtree Burial Watchdog (5)</td>
        <td>Wyndham Catacombs in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Second Church of Marika in Altus Plateau</td>
        <td>Travel to the church and speak to the wounded Yura. He will die and leave behind his Nagakiba weapon</td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Second Church of Marika in Altus Plateau</td>
        <td>Shortly after his death Elenora will invade  you, defeat her for the Purifying Crystal Tear, and Eleonora's Poleblade</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Roundtable Hold</td>
        <td>After visiting Gurranq, he will ask if you share his ambitions. Answer yes, and he will offer his wares to you</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Roundtable Hold</td>
        <td>Give the Weathered Dagger from Fia's questline to him and reload the area</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Roundtable Hold</td>
        <td>You will find his corpse with Fia kneeling over it. You can loot his body to receive his bell bearing and the Twinned Set</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Roundtable Hold</td>
        <td>After entering the Altus Plateau, return to the Roundtable Hold again and speak to Corhyn. He will then leave the Roundtable Hold</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Roundtable Hold</td>
        <td>After reaching Altus Plateau, speak to Fia and allow her to hold you. She will give you a dagger and ask that you find its owner </td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Roundtable Hold</td>
        <td>Give the dagger to D, and reload the area</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Roundtable Hold</td>
        <td>Fia will be standing over D's corpse in a newly opened room, speak to her and she will disappear</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Altus Highway Junction site of grace in Altus Plateau</td>
        <td>Corhyn can be found on the road north of the site of grace. Speak to him and ask about the Goldmask. He will also update the wares he offers you</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Forest-Spanning Greatbridge site of grace in Altus Plateau</td>
        <td>Continue down the road to the Forest-Spanning Greatbridge where you'll find a teleporter. Taking the teleporter will send you to the broken bridge where you'll find Goldmask, interact with him</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Altus Highway Junction site of grace in Altus Plateau</td>
        <td>Return to Corhyn and tell him you found Goldmask and then reload the area</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Forest-Spanning Greatbridge site of grace in Altus Plateau</td>
        <td>Go back to where Goldmask was and Corhyn will be standing next to him, exaust his dialogue. He will also update his wares again</td>
    </tr>
    <tr>
        <td>Stonedigger Troll (2)</td>
        <td>Old Altus Tunnels in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Elemer of the Briar</td>
        <td>The Shaded Castle in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>The Shaded Castle in Altus Plateau</td>
        <td>Aquire the Valkyrie's Prosthesis from the treasure chest in the room guarded by a single Cleanrot Knight on the North Western edge of the castle</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Erdtree-Gazing Hill site of grace in Altus Plateau</td>
        <td>Millicent can be found just north of the site of grace, speak with her and give her the Valkyrie's Prosthesis and exaust her dialogue</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Progress Millicent's questline up to the point where you have given Millicent the prosthesis</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Return to Gowry  and inform him that you gave Millicent the prosthesis</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>Gowry will update his wares with the Pest Threads incantation. Purchase this incantation to unlock more dialogue</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>After exausting the new dialogue you will receieve the Desperate Prayer gesture</td>
    </tr>
    <tr>
        <td>Sanguine Noble</td>
        <td>Writheblood Ruins in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Wormface</td>
        <td>Minor Erdtree(Altus Plateau) in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Godskin Apostle (2)</td>
        <td>Dominula, Windmill Village in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Dominula, Windmill Village in Altus Plateau</td>
        <td>Defeat the Godskin Apostle in Dominula, Windmill Village, then reload the area</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Windmill Heights site of grace in Altus Plateau</td>
        <td>After defeating the Godskin Apostle, Millicent will be nearby the Windmill Heights site of grace. Speak with her and exaust all dialogue</td>
    </tr>
    <tr>
        <td>Crystalian Spear &amp; Crystalian Ringblade</td>
        <td>Altus Tunnel in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Black Knife Assassin (4)</td>
        <td>Sainted Hero's Grave in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Ancient Hero of Zamor (2)</td>
        <td>Sainted Hero's Grave in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Altus Highway Junction site of grace in Altus Plateau</td>
        <td>Northeast of the site of grace, along the cliffs, you'll find the Amber Starlight that Seluvis needs</td>
    </tr>
    <tr>
        <td>Omenkiller &amp; Miranda the Blighted Bloom</td>
        <td>Perfumer's Grotto in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Fallingstar Beast (2)</td>
        <td>Outer Wall Phantom Tree in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Tree Sentinel Duo</td>
        <td>Altus Highway Junction in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Roundtable Hold</td>
        <td>The Dung Eater's spectral form will appear in the Roundtable Hold after reaching the Altus Plateau</td>
    </tr>
</table>




<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="underground">
    <tr>
        <td>Mimic Tear</td>
        <td>Nokron, Eternal City in Upper Siofra River</td>
        <td></td>
    </tr>
    <tr>
        <td>Regal Ancestor Spirit</td>
        <td>Hallowhorn Grounds in Nokron: The Eternal City</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Night's Sacred Ground in Upper Siofra River</td>
        <td>Retrieve the Fingerslayer Blade from the Night's Sacred Ground</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Siofra Aqueduct in Upper Siofra River</td>
        <td>Outside the entrance to the arena for the Valiant Gargoyle boss you will find D's twin brother</td>
    </tr>
    <tr>
        <td>D Hunter of the Dead</td>
        <td>Siofra Aqueduct in Upper Siofra River</td>
        <td>You can give him D's armor set, and you will receive the Inner Order gesture in return. (If you do this, he wil murder Fia at the end of her questline)*</td>
    </tr>
    <tr>
        <td>Valiant Gargoyle &amp; Valiant Gargoyle (Twinblade)</td>
        <td>Siofra Aqueduct in Upper Siofra River</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Return to Ranni and give her the blade. She will reward the you with the Carian Inverted Statue</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Carian Study Hall in Liurnia</td>
        <td>Travel to the Carian Study Hall and use the statue on the pedestal in front of the globe. Make your way through the now inverted study hall to the divine tower across the bridge</td>
    </tr>
    <tr>
    <tr>
        <td>Godskin Noble (1)</td>
        <td>Divine Tower of Liurnia in Liurnia</td>
        <td></td>
    </tr>
        <td>Ranni</td>
        <td>Divine Tower of Liurnia</td>
        <td>Reach the top of the tower to find Ranni's original body and loot the Cursemark of Death</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Progress Ranni's questline to the point where you have acquired the Cursemark of Death</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Renna's Rise will now be open and contains a teleporter. Take the teleporter to Ainsel River main and retrieve the Miniature Ranni doll</td>
    </tr>
    <tr>
        <td>Crucible Knight Siluria</td>
        <td>The Nameless Eternal City in Deeproot Depths</td>
        <td></td>
    </tr>
    <tr>
        <td>Fia's Champions</td>
        <td>Prince of Death's Throne in Deeproot Depths</td>
        <td></td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Across the Roots site of grace in Deeproot Depths</td>
        <td>Enter the boss arena at the top of the tree roots in the Deeproot Depths and fight off Fia's champions.</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>After the fight is over, Fia will be under the corpse of Godwyn. Speak to her and tell her you want to be held</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>She will ask the player to bring her the Cursemark of Death from Ranni's questline, give it to her, exaust her dialogue, and then reload the area</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>After reloading the area, be held by Fia once more and exaust her dialogue, then reload the area again</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>After reloading the area, Fia will be asleep next to Godwyn. Examine her and you will enter Godwyn's dream and fight Lichdragon Fortissax</td>
    </tr>
    <tr>
        <td>Lichdragon Fortissax</td>
        <td>Prince of Death's Throne in Deeproot Depths</td>
        <td></td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>Defeat Lichdragon Fortissax and you will receive the Mending Rune of the Death-Prince*</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>If you can gave D's armor set to his brother reload the area to find D's brother standing over Fia's corpse. Loot Fia for her armor set</td>
    </tr>
    <tr>
        <td>Fia</td>
        <td>Prince of Death's Throne site of grace in Deeproot Depths</td>
        <td>Speak to D's brother and exaust his dialogue, then reload the area to find the Inseparable Sword and the Twinned armor set</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Ainsel River Main site of grace in Ainsel River Main</td>
        <td>Speak to the doll at the nearby site of grace until Ranni speaks to you through it and gives you a task to defeat the Baleful Shadow</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Nokstella, Eternal City in Ainsel River Main</td>
        <td>Reach the end of Nokstella and the Baleful Shadow will be waiting for you. Defeat him for the Discarded Palace Key</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Raya Lucaria Grand Library in Liurnia</td>
        <td>Use the key to unlock the chest in the library next to Rennala to receive the Dark Moon Ring</td>
    </tr>
    <tr>
        <td>Dragonkin Soldier (2)</td>
        <td>Lake of Rot in Ainsel River Main</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Grand Cloister in Ainsel River Main</td>
        <td>Use the coffin at the end of the Grand Cloister area to travel to the arena for Astel, Naturalborn of the Void</td>
    </tr>
    <tr>
        <td>Astel, Naturalborn of the Void</td>
        <td>Grand Cloister in Ainsel River Main</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Grand Cloister in Ainsel River Main</td>
        <td>Defeat Astel, Naturalborn of the Void and take the elevator in the back of the room</td>
    </tr>
    <tr>
        <td>Glintstone Dragon Adula - Part 2</td>
        <td>Cathedral of Manus Celes in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Moonlight Altar site of grace in Liurnia</td>
        <td>Defeat Glintstone Dragon Adula and head into the Cathedral of Manus Celes. Decend the pit located insane</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Cathedral of Manus Celes in Liurnia</td>
        <td>You'll find Ranni's body in front of a slaughtered 2 Fingers, interact with her. She will reward you with the Dark Moon Greatsword**</td>
    </tr>
    <tr>
        <td>Alecto, Black Knife Ringleader</td>
        <td>Ringleader's Evergaol in Liurnia</td>
        <td></td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Give the shard to Seluvis and he'll give you the Magic Scorpion Charm, and the Amber Draught, and asks you to give it to Ranni</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Give the Amber Draught to Ranni and reload the area</td>
    </tr>
    <tr>
        <td>Seluvis</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Seluvis will be found dead at his tower, with Ranni and Iji disappearing from the area</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>After finishing Ranni's questline, head back to Seluvis's Rise to find him dead, with his armor set on his body</td>
    </tr>
    <tr>
        <td>Ranni</td>
        <td>Seluvis's Rise in Liurnia</td>
        <td>Go down into Pidia's puppet room northeast of Seluvis's Rise to find his corpse among the now animate puppets. Loot his body for a puppet spirit based on who you gave Seluvis's potion to during his questline</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Fully complete Ranni's questline</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>After fully completing Ranni's questline, Blaidd will be in Ranni's Rise and hostile. Kill him for his armor set and weapon. His mask can be found on top of the wall behind Seluvis's Rise afterward.</td>
    </tr>
    <tr>
        <td>Blaidd</td>
        <td>Road to the Manor site of grace in Liurnia</td>
        <td>After defeating Blaidd, speak to War Counselor Iji for a new dialogue option. Exaust this new dialogue and reload the area and loot his now dead body for Iji's Mirrorhelm and his bell bearing</td>
    </tr>
</table>

<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="gelmir">
    <tr>
        <td>Demi-Human Queen Margot</td>
        <td>Volcano Cave in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>First Mt. Gelmir Campsite site of grace in Mt. Gelmir</td>
        <td>After reaching the Altus Plateau, Patches can be found hiding in some bushes near the cliff edge to the west of the First Mt. Gelmir Campsite site of grace</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>First Mt. Gelmir Campsite site of grace in Mt. Gelmir</td>
        <td>(Optional) If you follow the rainbow stones he placed to the cliffs edge, a cutscene will play of Patches kicking you off the cliff*</td>
    </tr>
    <tr>
        <td>Ulcerated Tree Spirit (3)</td>
        <td>Minor Erdtree (Mt. Gelmir) in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Kindred of Rot</td>
        <td>Seethewater Cave in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Red Wolf of the Champion</td>
        <td>Gelmir Hero's Grave in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Full-Grown Fallingstar Beast</td>
        <td>Ninth Mt. Gelmir Campsite in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Magma Wyrm (2)</td>
        <td>Seethewater Terminus in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Seethewater Terminus site of grace in Mt. Gelmir</td>
        <td>You can find him bathing in the lava pit to the south of Fort Laiedd, speak to him from the rock lying in the center of the pit and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Hermit Village in Mt. Gelmir</td>
        <td>Travel to the Hermit Village and interact with Azur next to the site of grace, who will give you the Comet Azur sorcery</td>
    </tr>
    <tr>
        <td>Demi-Human Queen Maggie</td>
        <td>Hermit Village in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Abductor Virgins</td>
        <td>Subterranean Inquisition Chamber in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Enter the manor and speak to Tanith, who is sitting in a chair next to a Crucible Knight. She will ask if you would pledge your services to the manor, accept to receive the Drawing-Room Key</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Enlist into the service of the Volcano Manor</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Use the key on the second door on the left side of the hallway to Tanith's right to enter a large room with a Letter from Volcano Manor left on the table for you. Take the letter and read it</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Warmaster's Shack in Limgrave</td>
        <td>Assassinate Old Knight Istvan at the marker on your map using the red invasion sign under the Divine Bridge north of the shack</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Join the Volcano manor and complete one assassination for them</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Patches will appear in the manor near the entrace room, exaust his dialogue to receive the Letter to Patches</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Return to Tanith and speak with her to be rewarded with the Magma Shot, then reload the area</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Enter the drawing room again to find another letter on the table, take it and read it</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Old Altus Tunnel in Altus Plateau</td>
        <td>Assassinate Rileigh the Idle at the marker on your map using the red invasion sign outside of the Old Altus Tunnel</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Ruin-Strewn Precipice in Liurnia</td>
        <td>Locate the invasion sign in the boss chamber of the Ruin-Strewn Precipice and defeat the target to receive the Bull-Goat Armor set**</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Go back and speak to patches, then reload the area</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>After reloading the area, Speak to Patches again to receive the Magma Whip Candlestick</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Return to Tanith and speak with her to be rewarded with the Serpentbone Blade, then reload the area</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Enter the drawing room again to find another letter on the table, take it and read it</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Shack of the Lofty in East Mountaintops of the Giants</td>
        <td>Assassinate Juno Hoslow, Knight of Blood the marker on your map using the red invasion sign near the shack</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Complete three assassinations in Tanith's questline and Diallos will leave the manor and go to Jarburg (or kill Rykard, Lord of Blasphemy and speak to Diallos afterward)</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Return to Tanith and speak with her to be rewarded with the Taker's Cameo talisman</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Speak with Tanith again after receiving your reward and she will ask you to meet Rykard, Lord of Blasphemy. Accept, and you will be teleported directly outside of his boss arena</td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Join the Volcano Manor, after which speak to Bernahl in the large room on the left side of the hallway. He will introduce himself and offer his wares</td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Complete the 2nd assassination and then talk to Bernahl, who will give you a letter with two additional targets and offer you to join him in killing them</td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Fortified Manor, First Floor in Altus Plateau</td>
        <td>Kill both the targets with Bernahl to receive the Raging Wolf Set</td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Meet Bernahl back at the Volcano Manor to get the Gelmir's Fury Sorcery</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Complete assassinations until Rya moves to another room and appears in snake form. Speak with her, then reload the area</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Return to Rya, now in her human form, and speak to her.  Then enter the illusory wall in the back-right of the room and reach the Prison Town Church site of grace</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>After getting the site of grace, speak to Rya and tell her of the secret part of the manor</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>(Optional) Speak to Tanith for some dialogue about Rya</td>
    </tr>
    <tr>
        <td>Godskin Noble (2)</td>
        <td>Volcano Manor in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Temple of Eiglay in Mt. Gelmir</td>
        <td>Defeat the Godskin Noble and aquire the Serpent's Amnion</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Give the Serpent's Amnion to Rya and she will leave the manor</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>(Optional) Speak to Tanith about Rya again and she will give a Tonic of Forgetfulness to give to her</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Temple of Eiglay site of grace in Mt. Gelmir</td>
        <td>Take the elevator next to the site of grace and get off partway. Then jump out of the window and cross the lava into the other window to find Rya kneeling in a room. Speak to her</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Temple of Eiglay site of grace in Mt. Gelmir</td>
        <td>Rya will ask you to kill her, if you do so she will drop Daedicar's Woe. If you give her the tonic, she simply goes to sleep</td>
    </tr>
    <tr>
        <td>Rya</td>
        <td>Temple of Eiglay site of grace in Mt. Gelmir</td>
        <td>If you leave her alive and defeat Rykard, speak to her afterward and then reload the area to find the Daedicar's Woe and Zoraya's Letter in her place</td>
    </tr>
    <tr>
        <td>Rykard, Lord of Blasphemy</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td></td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Defeat Rykard, Lord of Blasphemy</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Defeat Rykard, Lord of Blasphemy.</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>Defeat Rykard, Lord of Blasphemy</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>After defeating Rykard, return to Tanith and speak with her, then reload the area</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Rykard, Lord of Blasphemy site of grace in Mt. Gelmir</td>
        <td>Return to Rykard's lair to find Tanith feasting on his corpse. You may kill her to receive the Consort's Set</td>
    </tr>
    <tr>
        <td>Tanith</td>
        <td>Rykard, Lord of Blasphemy site of grace in Mt. Gelmir</td>
        <td>After killing Tanith, her Crucible Knight bodyguard will invade you. Defeat him to receive the Aspect of the Crucible: Breath</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>After defeating Rykard, speak to patches in the manor and he will say goodbye and leave the manor</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>The Shaded Castle in Altus Plateau</td>
        <td>Patches can be found right before the Shaded Castle boss room. Speak to him and he will give you the Dancer's Castonettes</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Volcano Manor in Mt. Gelmir</td>
        <td>(Optional) You can give the Dancer's Castonettes to Tanith inside of Rykard's boss room for some completely pointless dialogue</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Murkwater Cave in Limgrave</td>
        <td>Return to the Murkwater Cave and enter the boss room to fight Patches again. Spare him when he surrenders again to receive the Patches's Crouch gesture</td>
    </tr>
    <tr>
        <td>Patches</td>
        <td>Murkwater Cave in Limgrave</td>
        <td></td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Waypoint Ruins in Limgrave</td>
        <td>Go back to Sellen and show her the sorcery and she will offer you a proposition. Accept, and she will then ask you to find Master Lusat, and hands you a key to his prison</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Jarburg in Liurnia</td>
        <td>Progress Jar-Bairn's questline</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Jarburg in Liurnia</td>
        <td>Speak to Diallos, who can be found in one of the buildings tending to a Living Jar, and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Jarburg site of grace in Liurnia</td>
        <td>Rest at the site of grace and pass time until Diallos and Jar-Bairn move to the middle of town.</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Jarburg in Liurnia</td>
        <td>Speak to the wounded Diallos and answer his question however you like, then speak to Jar-Bairn and exaust his dialogue, then reload the area</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Jarburg in Liurnia</td>
        <td>After reloading the area, Jar-Bairn will be kneeling over Diallos's corpse, speak to him again and exaust his dialogue, then reload the area again</td>
    </tr>
    <tr>
        <td>Diallos</td>
        <td>Jarburg in Liurnia</td>
        <td>After reloading the area, Diallos's body will be gone, leaving behind the Diallos's Mask and Hoslow's Petal Whip, and a Numen's Rune in its place</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Sellia Hideaway in Caelid</td>
        <td>You'll find Lusat in a cave behind an illusory wall in the graveyard northeast of the Church of the Plague. Interact with him to receive the Stars of Ruin sorcery</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Waypoint Ruins in Limgrave</td>
        <td>Return to Sellen after grabbing the sorcery from Lusat and killing Radahn and she will request you to meet her in person at the Witchbane Ruins</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Witchbane Ruins in Weeping Peninsula</td>
        <td>Speak to her at Witchbane Ruins and she will give you Sellen's Primal Glintstone, then reload the area</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Witchbane Ruins in Weeping Peninsula</td>
        <td>Return to Witchbane Ruins and Witch Hunter Jerren will be there, exaust his dialogue</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Ranni's Rise in Liurnia</td>
        <td>Head Seluvis's underground laboratory from his questline. A puppet of Sellen can be found behind an illusory wall inside, give the Primal Glintstone to it. Then speak to her and exaust her dialogue</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Raya Lucaria Grand Library in Liurnia</td>
        <td>Travel to the Grand Library in the academy and exit the library. Outside you will find two summoning signs</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Raya Lucaria Grand Library in Liurnia</td>
        <td>If you assist Sellen in defeating Jerren, you will get the Eccentric set, as well as the Glintstone Kris after speaking to Sellen. The Shard Spiral sorcery will also be added to her wares</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Raya Lucaria Grand Library in Liurnia</td>
        <td>Reload the area after speaking to her and the Witche's Glintstone Crown will also appear next to a now transformed Sellen</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Raya Lucaria Grand Library in Liurnia</td>
        <td>If you instead assisted Jerren in defeating Sellen, you will receive the Witch's Glintstone Crown, Sellen's Bell bearing, and an Ancient Dragon Smithing stone after speaking to Jerren</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Hermit Village in Mt. Gelmir</td>
        <td>After Sellen transforms, you can pick up Azur's Glintstone set from where his body used to be</td>
    </tr>
    <tr>
        <td>Sellen</td>
        <td>Sellia Hideaway in Caelid</td>
        <td>You can also grab Lusat's set from where his body used to be</td>
    </tr>
    <tr>
        <td>Bell Bearing Hunter (3)</td>
        <td>Isolated Merchant in Caelid (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Godskin Apostle (1)</td>
        <td>Divine Tower of Caelid in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Putrid Avatar (1)</td>
        <td>Minor Erdtree (Dragonbarrow) in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Beastman of Farum Azula (2)</td>
        <td>Dragonbarrow Cave in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Night's Cavalry (6)</td>
        <td>Lenne's Rise in Caelid (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Flying Dragon Greyll</td>
        <td>Farum Greatbridge in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Black Blade Kindred (1)</td>
        <td>Bestial Sanctum in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Crucible Knight &amp; Misbegotten Warrior</td>
        <td>Redmane Castle in Caelid</td>
        <td></td>
    </tr>
    <tr>
        <td>Putrid Tree Spirit</td>
        <td>War-Dead Catacombs in Caelid</td>
    </tr>
</table>


<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="leyndell">
    <tr>
        <td>Bell Bearing Hunter (4)</td>
        <td>Hermit Merchant's Shack in Altus Plateau (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Deathbird (4)</td>
        <td>Hermit Merchant's Shack in Altus Plateau (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Onyx Lord</td>
        <td>Sealed Tunnel in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>East Capital Ramparts site of grace in Altus Plateau</td>
        <td>Rest at this site and Boc will appear. Speak to him and give him the Gold Sewing Needle. Afterward, he will comment on his ugly appearance and express his desire to be reborn</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>East Capital Ramparts site of grace in Altus Plateau</td>
        <td>You can now either give him a Larval Tear, or perform the "You're Beatiful" Prattling Pate in front of him (found in Hermit Village in Mt. Gelmir)</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>East Capital Ramparts site of grace in Altus Plateau</td>
        <td>If you perform the "You're Beatiful" Prattling Pate in front of him, he will thank you for the kind words</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Grand Library of Raya Lucaria Academy site of grace in Liurnia</td>
        <td>If you give him the Larval Tear, he will move to the Grand Library in his new human form and be unresponsive and die after resting at a site of grace</td>
    </tr>
    <tr>
        <td>Draconic Tree Sentinel</td>
        <td>Capital Rampart in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Capital Rampart site of grace in Altus Plateau</td>
        <td>If Boiled Prawns was purchased from him prior to entering Altus Plateau, Boggart will be next to the outer moat nearby the site of grace</td>
    </tr>
    <tr>
        <td>Grave Warden Duelist (2)</td>
        <td>Auriza Side Tomb in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Crucible Knight &amp; Crucible Knight Ordovis</td>
        <td>Auriza Hero's Grave in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Esgar, Priest of Blood</td>
        <td>Leyndell Catacombs in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Godfrey, First Elden Lord (Golden Shade)</td>
        <td>Erdtree Sanctuary in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Erdtree Sanctuary in Altus Plateau</td>
        <td>Defeat the Godfrey, the First Elden Lord's shade in the Erdtree Sanctuary, and Corhyn and Goldmask will move</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell Colosseum in Altus Plateau</td>
        <td>Goldmask and Corhyn will be outside the colosseum in southwest Leyndell, exaust Corhyn's dialogue</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Erdtree Sanctuary in Altus Plateau</td>
        <td>Acquire the Golden Order Principia prayer book from the chair hanging from the ceiling in the Erdtree Sanctuary</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell Colosseum in Altus Plateau</td>
        <td>Give the prayer book to Corhyn and purchase the Law of Regression incantation</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Raya Lucaria Grand Library in Liurnia</td>
        <td>For the next part you will need to use the Law of Regression incantation, which requires 37 INT. You can boost your INT through equipment, or visit Renalla for a rebirth if necessary</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Erdtree Sanctuary site of grace in Altus Plateau</td>
        <td>Head west from the Erdtree Sanctuary site of grace and go down the elevator. At the bottom you'll find a large statue with a message in front of  it. Cast Law of Regression on top of the message</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Erdtree Sanctuary site of grace in Altus Plateau</td>
        <td>After casting Law of Regression, a new message will appear, read it</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell Colosseum in Altus Plateau</td>
        <td>Return to the colosseum and speak to Goldmask and tell him the words of the message. Then speak to Corhyn, who will thank you and update his wares with the Immutable Shield incantation</td>
    </tr>
    <tr>
        <td>Morgott, the Omen King</td>
        <td>Elden Throne in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Leyndell, Royal Capital in Altus Plateau</td>
        <td>Defeat Morgott, The Omen King</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>Leyndell, Royal Capital in Altus Plateau</td>
        <td>Defeat Morgott, The Omen King</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Queen's Bedchamber site of grace in Altus Plateau</td>
        <td>Enter the Elden Throne and Defeat Morgott, The Omen King</td>
    </tr>
    <tr>
        <td>Nepheli Loux</td>
        <td>Godrick the Grafted site of grace in Limgrave</td>
        <td>Rest at the site of grace in the throne room and Nepheli, Kenneth, and Gostoc will appear. Speak to Nepheli to receive an Ancient Dragon Smithing Stone</td>
    </tr>
    <tr>
        <td>Kenneth Haight</td>
        <td>Godrick the Grafted site of grace in Limgrave</td>
        <td>Rest at the site of grace in the throne room and Nepheli, Kenneth, and Gostoc will appear. You may speak to Kenneth for some dialogue</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Roundtable Hold</td>
        <td>After aquiring at least one Seedbed Curse*, speak to him and he will give you the Sewer-Gaol Key and ask that you release his real form from its cell</td>
    </tr>
</table>



<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="giants">
    <tr>
        <td>Night's Cavalry (8)</td>
        <td>Forbidden Lands in Mountaintops of the Giants (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Black Blade Kindred (2)</td>
        <td>Forbidden Lands in Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Bloody Finger Hunter Yura</td>
        <td>Zamor Ruins site of grace in East Mountaintops of the Giants</td>
        <td>Yura will be found in the ruins with his body possessed by Shabriri. Kill him for the Ronin's set*</td>
    </tr>
    <tr>
        <td>Ancient Hero of Zamor (3)</td>
        <td>Giant-Conquering Hero's Grave in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Ulcerated Tree Spirit (2)</td>
        <td>Giant's Mountaintop Catacombs in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Ancient Snow Valley Ruins site of grace in East Mountaintops of the Giants</td>
        <td>Milicent will move to the Ancient Snow Valley Ruins, speak with her and exaust all dialogue</td>
    </tr>
    <tr>
        <td>Erdtree Avatar (5)</td>
        <td>Minor Erdtree (Mountaintops East) in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Stargazers Ruins in Mountaintops of the Giants</td>
        <td>Coryhn and Goldmask will next be found on the bridge south of Stargazers Ruins, exaust Corhyn's dialogue</td>
    </tr>
    <tr>
        <td>Death Rite Bird (3)</td>
        <td>Castle Sol Main Gate in East Mountaintops of the Giants (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Tibia Mariner (4)</td>
        <td>Snow Valley Ruins Overlook in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Commander Niall</td>
        <td>Castle Sol in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Vyke, Knight of the Roundtable</td>
        <td>Lord Contender's Evergaol in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Borealis the Freezing Fog</td>
        <td>Freezing Lake in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Spirit-Caller Snail (2)</td>
        <td>Spiritcaller's Cave in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Fire Giant</td>
        <td>Flame Peak in East Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Putrid Grave Warden Duelist</td>
        <td>Consecrated Snowfield Catacombs in West Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Night's Cavalry (Duo)</td>
        <td>Consecrated Snowfield in West Mountaintops of the Giants (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Astel, Stars of Darkness</td>
        <td>Yelough Anix Tunnel in West Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Great Wyrm Theodorix</td>
        <td>Inner Consecrated Snowfield in West Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Misbegotten Crusader</td>
        <td>Cave of the Forlorn in West Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Putrid Avatar (2)</td>
        <td>Minor Erdtree (Consecrated Snowfield) in West Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Death Rite Bird (4)</td>
        <td>Apostate Derelict in West Mountaintops of the Giants (nighttime only)</td>
        <td></td>
    </tr>
    <tr>
        <td>Latenna</td>
        <td>Apostate Derelict in West Mountaintops of the Giants</td>
        <td>Upon reaching the Apostate Derelict, the player can summon Latenna at the foot of the giant albinauric woman. Speak with Latenna to receive a Somber Ancient Dragon Smithing Stone</td>
    </tr>
    <tr>
        <td>Stray Mimic Tear</td>
        <td>Hidden Path to the Haligtree in West Mountaintops of the Giants</td>
        <td></td>
    </tr>
    <tr>
        <td>Gurranq Beast Clergyman</td>
        <td>Beastial Sanctum in Caelid</td>
        <td>Continue giving him 5 more Deathroot to claim all rewards from him</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Dynasty Mausoleum Midpoint site of grace in Siofra River</td>
        <td>After receiving the Pureblood Knight's Medal, a red invasion sign can be found at the Dynasty Mausoleum Midpoint site of grace, allowing you to invade Varre</td>
    </tr>
    <tr>
        <td>White Mask Varre</td>
        <td>Dynasty Mausoleum Midpoint site of grace in Siofra River</td>
        <td>After defeating Varré, you'll find him laying on the ground near where the invasion sign once was. Speak to him and exaust his dialogue and he will die, leaving behind Varré's Bouquet</td>
    </tr>
    <tr>
        <td>Mohg, Lord of Blood</td>
        <td>Mohgwyn Palace in Siofra River</td>
        <td></td>
    </tr>
    <tr>
        <td>Loretta, Knight of the Haligtree</td>
        <td>Haligtree Town in Haligtree</td>
        <td></td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Prayer Room site of grace in Haligtree</td>
        <td>(Optional) Milicent will be in the Prayer Room, you may speak to her for dialogue</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>Defeat the Ulcerated Tree Spirit located in the area just before the Drainage Channel site of grace. Then reload the area</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>Immediately after defeating the Tree Spirit, two summon signs will appear in the area nearby. one to aid Millicent against four invaders, and one to challenge and kill Millicent</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>If you choose to aid Millicent, you will receive the Rotten Winged Sword Insignia</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>If you choose to kill Millicent, you will receive Millicent's Prosthesis</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>After aiding Millicent, she will be found nearby laying next to a pool of scarlet rot, exaust her dialogue, then reload the area (DO NOT JUMP DOWN AND LAND ON HER)</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>Return to the area where Millicent was to find her body. Loot it for the Unalloyed Gold Needle</td>
    </tr>
    <tr>
        <td>Malenia, Blade of Miquella</td>
        <td>Haligtree Roots in Haligtree</td>
        <td></td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Drainage Channel site of grace in Haligtree</td>
        <td>Defeat Malenia, Blade of Miquella. Then reload the area</td>
    </tr>
    <tr>
        <td>Millicent</td>
        <td>Haligtree Roots site of grace in Haligtree</td>
        <td>After reloading the area, use the Unalloyed Gold Needle on the scarlet flower now in Melania's boss arena to receive Miquella's Needle and Somber Ancient Dragon Smithing Stone</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>(Optional) After defeating the Ulcerated Tree Spirit in the Haligtree as part of Millicent's quest, you may return to Gowry for some additional dialogue</td>
    </tr>
    <tr>
        <td>Gowry</td>
        <td>Gowry's Shack in Caelid</td>
        <td>After fully completing Millicent's questline, you can return to Gowry for some dialogue about her and may then kill him for the Flock's Canvas Talisman and his bell bearing</td>
    </tr>
</table>



<table class="table table-condensed table-striped table-responsive dt-responsive nonav" id="farum">
    <tr>
        <td>Godskin Duo</td>
        <td>Dragon Temple Altar in Crumbling Farum Azula</td>
        <td></td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Dragon Temple Lift site of grace in Crumbling Farum Azula</td>
        <td>From the site of grace, proceed through the area and head right from the golden seed tree. Kill the dragon on top of the building roof if you didn't kill him earlier in the Wormface area</td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Dragon Temple Lift site of grace in Crumbling Farum Azula</td>
        <td>After killing the dragon, reload the area and return to the building roof where it once was to find Alexander waiting for you. Speak to him and he will challenge you to a duel</td>
    </tr>
    <tr>
        <td>Iron Fist Alexander</td>
        <td>Dragon Temple Lift site of grace in Crumbling Farum Azula</td>
        <td>Defeat Alexander to receive the Shard of Alexander talisman and Alexander's Innards</td>
    </tr>
    <tr>
        <td>Jar-Bairn</td>
        <td>Crumbling Farum Azula</td>
        <td>Complete Iron Fist Alexander's questline to receive Alexander's Insides</td>
    </tr>
    <tr>
        <td>Dragonlord Placidusax</td>
        <td>Beside the Great Bridge in Crumbling Farum Azula</td>
        <td></td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Beside the Great Bridge site of grace in Crumbling Farum Azula</td>
        <td>From the site of grace, go the large bridge that leads to the boss door and run the opposite way of it. You'll eventually reach a ladder that goes down to another bridge with a tower at the end of it</td>
    </tr>
    <tr>
        <td>Knight Bernahl</td>
        <td>Beside the Great Bridge site of grace in Crumbling Farum Azula</td>
        <td>Enter the tower and Bernahl will invade. Kill him to get the Beast Champion set, the Devourer's Scepter, and Blasphemous Claw</td>
    </tr>
    <tr>
        <td>Maliketh, the Black Blade</td>
        <td>Beside the Great Bridge in Crumbling Farum Azula</td>
        <td></td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Crumbling Farum Azula</td>
        <td>Defeat Maliketh, The Black Blade</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>Crumbling Farum Azula</td>
        <td>Defeat Maliketh, the Black Blade</td>
    </tr>
    <tr>
        <td>Jar-Bairn</td>
        <td>Jarburg in Liurnia</td>
        <td>Return to Jarburg and speak to Jar-Bairn, and exuast his dialogue. If you are doing Diallos's questline then you will need to fully complete his questline to progress from here</td>
    </tr>
    <tr>
        <td>Jar-Bairn</td>
        <td>Jarburg in Liurnia</td>
        <td>Speak to Jar-Bairn and give him Alexander's Insides, then reload the area</td>
    </tr>
    <tr>
        <td>Jar-Bairn</td>
        <td>Jarburg in Liurnia</td>
        <td>Jar-Bairn will be gone and the Companion Jar talisman can be found in his place</td>
    </tr>
    <tr>
        <td>Boc The Seamster</td>
        <td>East Capital Ramparts site of grace in Altus Plateau</td>
        <td>After defeating Maliketh, return to the East Capital Ramparts site of grace to find Boc, who will ask if he may call you lord. Accept to conclude the questline</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell, Capital of Ash site of grace in Leyndell, Capital of Ash</td>
        <td>Once at the Capital of Ash and head directly south until you reach Corhyn who can be found kneeling near the end of a huge bolt sticking out of the ground. Speak to him</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell, Capital of Ash site of grace in Leyndell, Capital of Ash</td>
        <td>After speaking to Corhyn, continue heading south toward the stairway leading up to the elevator. Instead of heading up the stairs, take the path heading downward to the right</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell, Capital of Ash site of grace in Leyndell, Capital of Ash</td>
        <td>Near the end of the path you'll find Goldmask's corpse, which can be looted for the Mending Rune of Perfect Order*.</td>
    </tr>
    <tr>
        <td>Brother Corhyn</td>
        <td>Leyndell, Capital of Ash site of grace in Leyndell, Capital of Ash</td>
        <td>Reload the area and head back to where Corhyn was to find his bell bearing, Corhyn's Robe, and a Flail. Then head back to where Goldmask was and loot the body again for the Goldmask armor set</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Underground Roadside site of grace at Altus Plateau</td>
        <td>Take a left from the site of grace and go jump down the hole and then run past the Giant Poison Flowers and climb the ladder to find his cell and unlock it, speak to him inside</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Roundtable Hold</td>
        <td>Return to the Roundtable Hold and the Dung Eater will be gone, with a message left behind asking you to fight him at the outer moat of Leyndell</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Roundtable Hold</td>
        <td>Progress the Dung Eater's questline up to the point where he leaves the Roundtable Hold, leaving a message behind</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Capital Rampart site of grace in Altus Plateau</td>
        <td>Speak with Boggart near the moat and exaust his dialogue</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Capital Rampart site of grace in Altus Plateau</td>
        <td>Reload the area and interact with the wounded Boggart to trigger the Dung Eater's invasion, defeat the Dung Eater</td>
    </tr>
    <tr>
        <td>Blackguard Big Boggart</td>
        <td>Capital Rampart site of grace in Altus Plateau</td>
        <td>After defeating the Dung Eater, reload the area and a Seedbed Curse will be found on Big Boggart's body along with his normal drops</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Capital Rampart site of grace in Altus Plateau</td>
        <td>Travel to the shallow area of water northeast of the Capital Rampart site of grace and the Dung Eater will invade you. Defeat him to receive the Sword of Milos</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Capital Rampart site of grace in Altus Plateau</td>
        <td>(Optional) If you've been doing Blackguard Big Boggart's questline up to this point then you can loot his body for a Seedbed Curse</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Roundtable Hold</td>
        <td>Return to the Roundtable Hold and he will be back. Talk to him and he will ask you to give his real body five Seedbed Curses</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Underground Roadside site of grace at Altus Plateau</td>
        <td>Give his real body the Seedbed Curses and you will be receive the Mending Rune of the Fell Curse**</td>
    </tr>
    <tr>
        <td>Dung Eater</td>
        <td>Underground Roadside site of grace at Altus Plateau</td>
        <td>Reload the area and return to the cell to find the Omen armor set</td>
    </tr>
    <tr>
        <td>Mohg, The Omen</td>
        <td>Forsaken Depths in Altus Plateau</td>
        <td></td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Forsaken Depths site of grace in Altus Plateau</td>
        <td>Enter the Cathedral of the Forsaken at the bottom of the Subterranean Shunning-Grounds and Defeat Mogh, The Omen. Then attack the altar behind the treasure chest to reveal a secret passage</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Frenzied Flame Proscription site of gracein Altus Plateau</td>
        <td>After dropping down the pit and reaching Hyetta, speak to her, then remove all armor and weapons and interact with the wall down the hallway*</td>
    </tr>
    <tr>
        <td>Hyetta</td>
        <td>Frenzied Flame Proscription site of grace in Altus Plateau</td>
        <td>After the cutscene is over, speak with Hyetta and exaust her dialogue and she will burn up and die. Loot her body to receive the Frenzied Flame Seal</td>
    </tr>
    <tr>
        <td>Godfrey, First Elden Lord</td>
        <td>Elden Throne in Leyndell, Capital of Ash</td>
        <td></td>
    </tr>
    <tr>
        <td>Radagon of the Golden Order / Elden Beast</td>
        <td>Elden Throne in Leyndell, Capital of Ash</td>
    </tr>
</table>

</div>

</div>

<script>
    function showPanel(value){
        $('#mainpanel').html('<img src="eldenring/' + value + '.jpg" width="100%" />');
        var valueid = '#' + value;
        $('#limgrave').addClass('nonav');
      $('#liurna').addClass('nonav');
      $('#altus').addClass('nonav');
      $('#caelid').addClass('nonav');
     $('#gelmir').addClass('nonav');
     $('#leyndell').addClass('nonav');
      $('#underground').addClass('nonav');
      $('#giants').addClass('nonav');
      $('#farum').addClass('nonav');
        $(valueid).removeClass("nonav");
      }

    $(document).ready(function() {
      var table = $('#limgrave').DataTable();
      var table1 = $('#liurna').DataTable();
      var table2 = $('#altus').DataTable();
      var table3 = $('#caelid').DataTable();
      var table4 = $('#gelmir').DataTable();
      var table5 = $('#leyndell').DataTable();
      var table6 = $('#underground').DataTable();
      var table7 = $('#giants').DataTable();
      var table8 = $('#farum').DataTable();

});
  </script>

</div>
   <?php
   //Footer
   $footpath = $_SERVER['DOCUMENT_ROOT'];
   $footpath .= "/footer.php";
   include_once($footpath);
    ?>
