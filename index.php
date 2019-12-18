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
<!--         <div class="card">
            <img src="https://static.next-episode.net/tv-shows-images/huge/new-girl.jpg" onclick="shuffle('new')">
        </div> -->


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
                parks = {1:['https://www.netflix.com/watch/70152005', 'https://www.netflix.com/watch/70152006', 'https://www.netflix.com/watch/70152007', 'https://www.netflix.com/watch/70152008', 'https://www.netflix.com/watch/70152009', 'https://www.netflix.com/watch/70152010'], 2:['https://www.netflix.com/watch/70152011', 'https://www.netflix.com/watch/70152012', 'https://www.netflix.com/watch/70152013', 'https://www.netflix.com/watch/70152014', 'https://www.netflix.com/watch/70152015', 'https://www.netflix.com/watch/70152016', 'https://www.netflix.com/watch/70152017', 'https://www.netflix.com/watch/70152018', 'https://www.netflix.com/watch/70152019', 'https://www.netflix.com/watch/70152020', 'https://www.netflix.com/watch/70152021', 'https://www.netflix.com/watch/70152022', 'https://www.netflix.com/watch/70152023', 'https://www.netflix.com/watch/70152024', 'https://www.netflix.com/watch/70152025', 'https://www.netflix.com/watch/70152026', 'https://www.netflix.com/watch/70152027', 'https://www.netflix.com/watch/70152028', 'https://www.netflix.com/watch/70152029', 'https://www.netflix.com/watch/70152030', 'https://www.netflix.com/watch/70152031', 'https://www.netflix.com/watch/70152032', 'https://www.netflix.com/watch/70152033', 'https://www.netflix.com/watch/70152034'], 3:['https://www.netflix.com/watch/70190095', 'https://www.netflix.com/watch/70190096', 'https://www.netflix.com/watch/70190097', 'https://www.netflix.com/watch/70190098', 'https://www.netflix.com/watch/70190099', 'https://www.netflix.com/watch/70190100', 'https://www.netflix.com/watch/70190101', 'https://www.netflix.com/watch/70190102', 'https://www.netflix.com/watch/70190103', 'https://www.netflix.com/watch/70190104', 'https://www.netflix.com/watch/70190105', 'https://www.netflix.com/watch/70190106', 'https://www.netflix.com/watch/70190107', 'https://www.netflix.com/watch/70190108', 'https://www.netflix.com/watch/70190109', 'https://www.netflix.com/watch/70190110'], 4:['https://www.netflix.com/watch/70210916', 'https://www.netflix.com/watch/70210917', 'https://www.netflix.com/watch/70210918', 'https://www.netflix.com/watch/70210919', 'https://www.netflix.com/watch/70210920', 'https://www.netflix.com/watch/70210921', 'https://www.netflix.com/watch/70210922', 'https://www.netflix.com/watch/70210923', 'https://www.netflix.com/watch/70210924', 'https://www.netflix.com/watch/70210925', 'https://www.netflix.com/watch/70210926', 'https://www.netflix.com/watch/70210927', 'https://www.netflix.com/watch/70210928', 'https://www.netflix.com/watch/70210929', 'https://www.netflix.com/watch/70210930', 'https://www.netflix.com/watch/70210931', 'https://www.netflix.com/watch/70210932', 'https://www.netflix.com/watch/70210933', 'https://www.netflix.com/watch/70210934', 'https://www.netflix.com/watch/70210935', 'https://www.netflix.com/watch/70210936', 'https://www.netflix.com/watch/70210937'], 5:['https://www.netflix.com/watch/70286781', 'https://www.netflix.com/watch/70286782', 'https://www.netflix.com/watch/70286783', 'https://www.netflix.com/watch/70286784', 'https://www.netflix.com/watch/70286785', 'https://www.netflix.com/watch/70286786', 'https://www.netflix.com/watch/70286787', 'https://www.netflix.com/watch/70286788', 'https://www.netflix.com/watch/70286789', 'https://www.netflix.com/watch/70286790', 'https://www.netflix.com/watch/70286791', 'https://www.netflix.com/watch/70286792', 'https://www.netflix.com/watch/70286793', 'https://www.netflix.com/watch/70286794', 'https://www.netflix.com/watch/70286795', 'https://www.netflix.com/watch/70286796', 'https://www.netflix.com/watch/70286797', 'https://www.netflix.com/watch/70286798', 'https://www.netflix.com/watch/70286799', 'https://www.netflix.com/watch/70286800', 'https://www.netflix.com/watch/70286801', 'https://www.netflix.com/watch/70286802'], 6:['https://www.netflix.com/watch/80004317', 'https://www.netflix.com/watch/80004318', 'https://www.netflix.com/watch/80004319', 'https://www.netflix.com/watch/80007810', 'https://www.netflix.com/watch/80004320', 'https://www.netflix.com/watch/80004321', 'https://www.netflix.com/watch/80004322', 'https://www.netflix.com/watch/80004323', 'https://www.netflix.com/watch/80004324', 'https://www.netflix.com/watch/80004325', 'https://www.netflix.com/watch/80004326', 'https://www.netflix.com/watch/80004327', 'https://www.netflix.com/watch/80004328', 'https://www.netflix.com/watch/80004329', 'https://www.netflix.com/watch/80004330', 'https://www.netflix.com/watch/80004331', 'https://www.netflix.com/watch/80004332', 'https://www.netflix.com/watch/80004333', 'https://www.netflix.com/watch/80004334', 'https://www.netflix.com/watch/80080569'], 7:['https://www.netflix.com/watch/80080569', 'https://www.netflix.com/watch/80080570', 'https://www.netflix.com/watch/80080571', 'https://www.netflix.com/watch/80080572', 'https://www.netflix.com/watch/80080573', 'https://www.netflix.com/watch/80080574', 'https://www.netflix.com/watch/80080575', 'https://www.netflix.com/watch/80080576', 'https://www.netflix.com/watch/80080577', 'https://www.netflix.com/watch/80080578', 'https://www.netflix.com/watch/80080579', 'https://www.netflix.com/watch/80080580']}
                office = {1:['https://www.netflix.com/watch/70105212', 'https://www.netflix.com/watch/70069628', 'https://www.netflix.com/watch/70069629', 'https://www.netflix.com/watch/70069630', 'https://www.netflix.com/watch/70069631', 'https://www.netflix.com/watch/70069632', 'https://www.netflix.com/watch/70069633', 'https://www.netflix.com/watch/70069634', 'https://www.netflix.com/watch/70069635', 'https://www.netflix.com/watch/70069636', 'https://www.netflix.com/watch/70069637', 'https://www.netflix.com/watch/70069638', 'https://www.netflix.com/watch/70069639', 'https://www.netflix.com/watch/70069640', 'https://www.netflix.com/watch/70069641', 'https://www.netflix.com/watch/70069642', 'https://www.netflix.com/watch/70069643', 'https://www.netflix.com/watch/70069644', 'https://www.netflix.com/watch/70069645', 'https://www.netflix.com/watch/70069646', 'https://www.netflix.com/watch/70069647', 'https://www.netflix.com/watch/70069648', 'https://www.netflix.com/watch/70069649', 'https://www.netflix.com/watch/70069650', 'https://www.netflix.com/watch/70069651', 'https://www.netflix.com/watch/70069652', 'https://www.netflix.com/watch/70069653', 'https://www.netflix.com/watch/70069654', 'https://www.netflix.com/watch/70080635'], 2:['https://www.netflix.com/watch/70069633', 'https://www.netflix.com/watch/70069634', 'https://www.netflix.com/watch/70069635', 'https://www.netflix.com/watch/70069636', 'https://www.netflix.com/watch/70069637', 'https://www.netflix.com/watch/70069638', 'https://www.netflix.com/watch/70069639', 'https://www.netflix.com/watch/70069640', 'https://www.netflix.com/watch/70069641', 'https://www.netflix.com/watch/70069642', 'https://www.netflix.com/watch/70069643', 'https://www.netflix.com/watch/70069644', 'https://www.netflix.com/watch/70069645', 'https://www.netflix.com/watch/70069646', 'https://www.netflix.com/watch/70069647', 'https://www.netflix.com/watch/70069648', 'https://www.netflix.com/watch/70069649', 'https://www.netflix.com/watch/70069650', 'https://www.netflix.com/watch/70069651', 'https://www.netflix.com/watch/70069652', 'https://www.netflix.com/watch/70069653', 'https://www.netflix.com/watch/70069654'], 3:['https://www.netflix.com/watch/70080635', 'https://www.netflix.com/watch/70080631', 'https://www.netflix.com/watch/70080633', 'https://www.netflix.com/watch/70080636', 'https://www.netflix.com/watch/70080637', 'https://www.netflix.com/watch/70080634', 'https://www.netflix.com/watch/70080628', 'https://www.netflix.com/watch/70080639', 'https://www.netflix.com/watch/70080632', 'https://www.netflix.com/watch/70080627', 'https://www.netflix.com/watch/70080624', 'https://www.netflix.com/watch/70080645', 'https://www.netflix.com/watch/70080643', 'https://www.netflix.com/watch/70080626', 'https://www.netflix.com/watch/70080641', 'https://www.netflix.com/watch/70080629', 'https://www.netflix.com/watch/70080630', 'https://www.netflix.com/watch/70080640', 'https://www.netflix.com/watch/70080644', 'https://www.netflix.com/watch/70080642', 'https://www.netflix.com/watch/70080646', 'https://www.netflix.com/watch/70080625', 'https://www.netflix.com/watch/70080638'], 4:['https://www.netflix.com/watch/70108687', 'https://www.netflix.com/watch/70108688', 'https://www.netflix.com/watch/70108689', 'https://www.netflix.com/watch/70108690', 'https://www.netflix.com/watch/70108691', 'https://www.netflix.com/watch/70108692', 'https://www.netflix.com/watch/70108693', 'https://www.netflix.com/watch/70108694', 'https://www.netflix.com/watch/70108695', 'https://www.netflix.com/watch/70108696', 'https://www.netflix.com/watch/70108697', 'https://www.netflix.com/watch/70108698', 'https://www.netflix.com/watch/70108699', 'https://www.netflix.com/watch/70108700'], 5:['https://www.netflix.com/watch/70126223', 'https://www.netflix.com/watch/70126250', 'https://www.netflix.com/watch/70126224', 'https://www.netflix.com/watch/70126225', 'https://www.netflix.com/watch/70126226', 'https://www.netflix.com/watch/70126227', 'https://www.netflix.com/watch/70126228', 'https://www.netflix.com/watch/70126229', 'https://www.netflix.com/watch/70126230', 'https://www.netflix.com/watch/70126231', 'https://www.netflix.com/watch/70126232', 'https://www.netflix.com/watch/70126233', 'https://www.netflix.com/watch/70126234', 'https://www.netflix.com/watch/70126235', 'https://www.netflix.com/watch/70126249', 'https://www.netflix.com/watch/70126236', 'https://www.netflix.com/watch/70126237', 'https://www.netflix.com/watch/70126238', 'https://www.netflix.com/watch/70126239', 'https://www.netflix.com/watch/70126240', 'https://www.netflix.com/watch/70126241', 'https://www.netflix.com/watch/70126242', 'https://www.netflix.com/watch/70126243', 'https://www.netflix.com/watch/70126244', 'https://www.netflix.com/watch/70126245', 'https://www.netflix.com/watch/70126246', 'https://www.netflix.com/watch/70126247', 'https://www.netflix.com/watch/70126248'], 6:['https://www.netflix.com/watch/70151933', 'https://www.netflix.com/watch/70151934', 'https://www.netflix.com/watch/70151935', 'https://www.netflix.com/watch/70151936', 'https://www.netflix.com/watch/70151937', 'https://www.netflix.com/watch/70151938', 'https://www.netflix.com/watch/70151939', 'https://www.netflix.com/watch/70151940', 'https://www.netflix.com/watch/70151941', 'https://www.netflix.com/watch/70151942', 'https://www.netflix.com/watch/70151943', 'https://www.netflix.com/watch/70151944', 'https://www.netflix.com/watch/70151945', 'https://www.netflix.com/watch/70151946', 'https://www.netflix.com/watch/70151947', 'https://www.netflix.com/watch/70151948', 'https://www.netflix.com/watch/70151949', 'https://www.netflix.com/watch/70151950', 'https://www.netflix.com/watch/70151951', 'https://www.netflix.com/watch/70151952', 'https://www.netflix.com/watch/70151953', 'https://www.netflix.com/watch/70151954', 'https://www.netflix.com/watch/70151955', 'https://www.netflix.com/watch/70151956', 'https://www.netflix.com/watch/70151957', 'https://www.netflix.com/watch/70151958'], 7:['https://www.netflix.com/watch/70189006', 'https://www.netflix.com/watch/70189007', 'https://www.netflix.com/watch/70189008', 'https://www.netflix.com/watch/70189009', 'https://www.netflix.com/watch/70189010', 'https://www.netflix.com/watch/70189011', 'https://www.netflix.com/watch/70189012', 'https://www.netflix.com/watch/70189013', 'https://www.netflix.com/watch/70189014', 'https://www.netflix.com/watch/70189015', 'https://www.netflix.com/watch/70189016', 'https://www.netflix.com/watch/70189017', 'https://www.netflix.com/watch/70189018', 'https://www.netflix.com/watch/70189019', 'https://www.netflix.com/watch/70189020', 'https://www.netflix.com/watch/70189021', 'https://www.netflix.com/watch/70189022', 'https://www.netflix.com/watch/70189023', 'https://www.netflix.com/watch/70189024', 'https://www.netflix.com/watch/70189025', 'https://www.netflix.com/watch/70189026', 'https://www.netflix.com/watch/70189027', 'https://www.netflix.com/watch/70189028', 'https://www.netflix.com/watch/70189029', 'https://www.netflix.com/watch/70189030', 'https://www.netflix.com/watch/70189031'], 8:['https://www.netflix.com/watch/70210965', 'https://www.netflix.com/watch/70210966', 'https://www.netflix.com/watch/70210967', 'https://www.netflix.com/watch/70210967', 'https://www.netflix.com/watch/70210969', 'https://www.netflix.com/watch/70210970', 'https://www.netflix.com/watch/70210971', 'https://www.netflix.com/watch/70210972', 'https://www.netflix.com/watch/70210973', 'https://www.netflix.com/watch/70210974', 'https://www.netflix.com/watch/70210975', 'https://www.netflix.com/watch/70210976', 'https://www.netflix.com/watch/70210977', 'https://www.netflix.com/watch/70210978', 'https://www.netflix.com/watch/70210979', 'https://www.netflix.com/watch/70210980', 'https://www.netflix.com/watch/70210981', 'https://www.netflix.com/watch/70210982', 'https://www.netflix.com/watch/70210983', 'https://www.netflix.com/watch/70210984', 'https://www.netflix.com/watch/70210985', 'https://www.netflix.com/watch/70210986', 'https://www.netflix.com/watch/70210987', 'https://www.netflix.com/watch/70210988'], 9:['https://www.netflix.com/watch/70286845', 'https://www.netflix.com/watch/70286846', 'https://www.netflix.com/watch/70286847', 'https://www.netflix.com/watch/70286848', 'https://www.netflix.com/watch/70286849', 'https://www.netflix.com/watch/70286850', 'https://www.netflix.com/watch/70286851', 'https://www.netflix.com/watch/70286852', 'https://www.netflix.com/watch/70286853', 'https://www.netflix.com/watch/70286854', 'https://www.netflix.com/watch/70286855', 'https://www.netflix.com/watch/70286856', 'https://www.netflix.com/watch/70286857', 'https://www.netflix.com/watch/70286858', 'https://www.netflix.com/watch/70286859', 'https://www.netflix.com/watch/70286860', 'https://www.netflix.com/watch/70286861', 'https://www.netflix.com/watch/70286862', 'https://www.netflix.com/watch/70286863', 'https://www.netflix.com/watch/70286864', 'https://www.netflix.com/watch/70286865', 'https://www.netflix.com/watch/70286866', 'https://www.netflix.com/watch/70286867']}
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
                console.log(chosen);
                window.open(chosen, '_blank');
            }
        </script>
    </body>
</html>