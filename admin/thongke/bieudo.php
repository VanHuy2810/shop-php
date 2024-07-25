<div class="row">
<div id="myChart" style="max-width:700px; height:400px"></div>


<script src="https://www.gstatic.com/charts/loader.js"></script>

<script>
google.charts.load('current',{packages:['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Your Function
function drawChart() {

// Set Data
const data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
   <?php 
        $tongdm=sizeof($listtk); 
       $i=1; 
    //    foreach($listtk as $tk){
    //           extract($tk); 
    //           if($i==$tongdm) $dauphay=""; else $dauphay=","; 
    //           echo " ['".$tendm."', ".$countsp."]".$dauphay;
    //          $i+=1;    
    //     }
        foreach ($listtk as $tk) {
            extract($tk);
            if($i==$tongdm) $dauphay=""; else $dauphay=",";
            echo " ['".$tk["tendm"]."', ".$tk["countsp"]."]".$dauphay;
            $i+=1; 
            } 
      ?>
//   ['Italy', 55],
//   ['France', 49],
//   ['Spain', 44],
//   ['USA', 24],
//   ['Argentina', 15]
]);
// Set Options
const options = {
  title: 'Thống Kê'
};

// Draw
const chart = new google.visualization.PieChart(document.getElementById('myChart'));

chart.draw(data, options);

}

</script>

</div