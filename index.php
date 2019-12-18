<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Netflix Shuffler</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>  
        <script src="jquery.gradientify.min.js"></script>
        <link rel="stylesheet" href="style.css"/>  
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139847415-3"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-139847415-3');
        </script>


    </head>
    <body>
        <img src="netflixLogo.png">
        <h1>Shuffler</h1>
        <div class="card" onmouseover="coloroffice()">
            <img src="https://img.nbc.com/sites/nbcunbc/files/images/2016/1/19/MDot-TheOffice-640x360-MP.jpg" onclick="shuffle('office')">
        </div>
        <div class="card">
            <img src="https://img.nbc.com/sites/nbcunbc/files/files/images/2013/11/08/2013_0821_Parks_and_Recreation_640x320_Mdot.jpg" onclick="shuffle('parks')">
        </div>
        <div class="card">
            <img src="https://static.next-episode.net/tv-shows-images/huge/new-girl.jpg" onclick="shuffle('newgirl')">
        </div>


<script>
        var grey1 = [220, 220, 220];
        var grey2 = [105, 105, 105];
        var office1 = [93, 188, 210];
        var office2 = [170, 229, 252];

        var sc = grey1;
        var ec = grey2;

        function coloroffice() {
            console.log("here");
            sc = office1;
            ec = office2;
        }

        

        $('body').gradientify({
                gradients: [
                    { start: sc, stop: ec },
                    { start: ec, stop: sc }
                ]
            });

        $('card').gradientify({
                gradients: [
                    { start: office1, stop: office2 },
                    { start: office2, stop: office1 }
                ]
            });




            function shuffle(show) {
                var chosen;
                newgirl = {1:['70276483', '70276484', '70276485', '70276486', '70276487', '70276488', '70276489', '70276490', '70276491', '70276492', '70276493', '70276494', '70276495', '70276496', '70276497', '70276498', '70276499', '70276500', '70276501', '70276502', '70276503', '70276504', '70276505', '70276506'], 2:['70286213', '70286214', '70286215', '70286216', '70286217', '70286218', '70286219', '70286220', '70286221', '70286222', '70286223', '70286224', '70286225', '70286226', '70286227', '70286228', '70286229', '70286230', '70286231', '70286232', '70286233', '70286234', '70286235', '70286236', '70286237'], 3:['80010718', '80010719', '80010720', '80010721', '80010722', '80010723', '80010724', '80010725', '80010726', '80010727', '80010728', '80010729', '80010730', '80010731', '80010732', '80010733', '80010734', '80010735', '80010736', '80010737', '80010738', '80010739', '80010740']}
                parks = {1:['70152005', '70152006', '70152007', '70152008', '70152009', '70152010'], 2:['70152011', '70152012', '70152013', '70152014', '70152015', '70152016', '70152017', '70152018', '70152019', '70152020', '70152021', '70152022', '70152023', '70152024', '70152025', '70152026', '70152027', '70152028', '70152029', '70152030', '70152031', '70152032', '70152033', '70152034'], 3:['70190095', '70190096', '70190097', '70190098', '70190099', '70190100', '70190101', '70190102', '70190103', '70190104', '70190105', '70190106', '70190107', '70190108', '70190109', '70190110'], 4:['70210916', '70210917', '70210918', '70210919', '70210920', '70210921', '70210922', '70210923', '70210924', '70210925', '70210926', '70210927', '70210928', '70210929', '70210930', '70210931', '70210932', '70210933', '70210934', '70210935', '70210936', '70210937'], 5:['70286781', '70286782', '70286783', '70286784', '70286785', '70286786', '70286787', '70286788', '70286789', '70286790', '70286791', '70286792', '70286793', '70286794', '70286795', '70286796', '70286797', '70286798', '70286799', '70286800', '70286801', '70286802'], 6:['80004317', '80004318', '80004319', '80007810', '80004320', '80004321', '80004322', '80004323', '80004324', '80004325', '80004326', '80004327', '80004328', '80004329', '80004330', '80004331', '80004332', '80004333', '80004334', '80080569'], 7:['80080569', '80080570', '80080571', '80080572', '80080573', '80080574', '80080575', '80080576', '80080577', '80080578', '80080579', '80080580']}
                office = {1:['70105212', '70069628', '70069629', '70069630', '70069631', '70069632', '70069633', '70069634', '70069635', '70069636', '70069637', '70069638', '70069639', '70069640', '70069641', '70069642', '70069643', '70069644', '70069645', '70069646', '70069647', '70069648', '70069649', '70069650', '70069651', '70069652', '70069653', '70069654', '70080635'], 2:['70069633', '70069634', '70069635', '70069636', '70069637', '70069638', '70069639', '70069640', '70069641', '70069642', '70069643', '70069644', '70069645', '70069646', '70069647', '70069648', '70069649', '70069650', '70069651', '70069652', '70069653', '70069654'], 3:['70080635', '70080631', '70080633', '70080636', '70080637', '70080634', '70080628', '70080639', '70080632', '70080627', '70080624', '70080645', '70080643', '70080626', '70080641', '70080629', '70080630', '70080640', '70080644', '70080642', '70080646', '70080625', '70080638'], 4:['70108687', '70108688', '70108689', '70108690', '70108691', '70108692', '70108693', '70108694', '70108695', '70108696', '70108697', '70108698', '70108699', '70108700'], 5:['70126223', '70126250', '70126224', '70126225', '70126226', '70126227', '70126228', '70126229', '70126230', '70126231', '70126232', '70126233', '70126234', '70126235', '70126249', '70126236', '70126237', '70126238', '70126239', '70126240', '70126241', '70126242', '70126243', '70126244', '70126245', '70126246', '70126247', '70126248'], 6:['70151933', '70151934', '70151935', '70151936', '70151937', '70151938', '70151939', '70151940', '70151941', '70151942', '70151943', '70151944', '70151945', '70151946', '70151947', '70151948', '70151949', '70151950', '70151951', '70151952', '70151953', '70151954', '70151955', '70151956', '70151957', '70151958'], 7:['70189006', '70189007', '70189008', '70189009', '70189010', '70189011', '70189012', '70189013', '70189014', '70189015', '70189016', '70189017', '70189018', '70189019', '70189020', '70189021', '70189022', '70189023', '70189024', '70189025', '70189026', '70189027', '70189028', '70189029', '70189030', '70189031'], 8:['70210965', '70210966', '70210967', '70210967', '70210969', '70210970', '70210971', '70210972', '70210973', '70210974', '70210975', '70210976', '70210977', '70210978', '70210979', '70210980', '70210981', '70210982', '70210983', '70210984', '70210985', '70210986', '70210987', '70210988'], 9:['70286845', '70286846', '70286847', '70286848', '70286849', '70286850', '70286851', '70286852', '70286853', '70286854', '70286855', '70286856', '70286857', '70286858', '70286859', '70286860', '70286861', '70286862', '70286863', '70286864', '70286865', '70286866', '70286867']}
                console.log("here");
                if (show == 'office') {
                    var season = Math.floor(Math.random() * 9) + 1;
                    var episode = Math.floor(Math.random() * office[season].length);
                    chosen = office[season][episode];
                }
                else if (show == 'parks') {
                    var season = Math.floor(Math.random() * 4) + 1;
                    var episode = Math.floor(Math.random() * parks[season].length);
                    chosen = parks[season][episode];
                }
                else if (show == 'newgirl') {
                    var season = Math.floor(Math.random() * 3) + 1;
                    var episode = Math.floor(Math.random() * newgirl[season].length);
                    chosen = newgirl[season][episode];
                }
                console.log(chosen);
                window.open('https://www.netflix.com/watch/' + chosen, '_blank');
            }
        </script>
    </body>
</html>