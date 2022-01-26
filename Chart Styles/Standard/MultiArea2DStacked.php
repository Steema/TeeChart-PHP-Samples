<?php
        //Includes
        include "../../../sources/libTeeChart.php";            
          
        $chart1 = new TChart(700,450);
        $yValues3 = Array(10,15,25,30,25,15,5,3,10,20,35,50,60,65,75,80,75,70,62,55,50,55,62,68,75,90,80,60,55,45,30,45,50,60,75,85,100,110,120,125,110,95,80,75,70,65,70,75,80,75,65,55,45,35,30,20,25,30);
        $yValues2 = Array(20,25,35,40,35,25,15,13,20,30,45,60,70,75,85,90,85,80,72,65,60,65,72,78,85,100,90,70,85,55,40,45,60,70,85,95,110,120,130,135,120,105,90,85,80,75,80,85,90,85,75,65,55,45,40,30,35,20);
        $yValues1 = Array(30,35,45,50,45,35,25,23,30,40,55,70,80,85,95,100,95,90,82,75,70,75,82,88,95,110,100,80,95,65,50,55,70,80,95,105,120,130,140,145,130,115,100,95,90,85,90,95,100,95,85,75,65,55,50,40,45,30);
        
        function ConfigureChart($chart1)
        {
            $chart1->getAspect()->setView3D(false);
            $chart1->getChart()->getHeader()->setText("2D Multi Area Stacked Chart");
            $chart1->getChart()->getWalls()->getBack()->setTransparent(true);     
            
            $panel=$chart1->getChart()->getPanel();
            $panel->getBevel()->setInner(BevelStyle::$NONE);
            $panel->getBevel()->setOuter(BevelStyle::$NONE);
            $panel->getPen()->setColor(Color::fromRgb(200,200,200));
            $panel->setColor(Color::getWHITE());
            $panel->getGradient()->setVisible(false);
            
            $chart1->getChart()->getLegend()->setVisible(false);
            
            $chart1->getChart()->getHeader()->setVisible(false);
            
            $chart1->getChart()->getAxes()->getLeft()->setIncrement(100);
            $chart1->getChart()->getAxes()->getLeft()->getAxisPen()->setColor(Color::fromRGB(150,150,150));
            $chart1->getChart()->getAxes()->getLeft()->getLabels()->getFont()->setColor(Color::fromRgb(120,120,120));
            $chart1->getChart()->getAxes()->getLeft()->getTicks()->setColor(Color::fromRGB(150,150,150));
            
            $chart1->getChart()->getAxes()->getBottom()->getGrid()->setVisible(false);        
            $chart1->getChart()->getAxes()->getBottom()->getLabels()->getFont()->setColor(Color::fromRgb(120,120,120));
            $chart1->getChart()->getAxes()->getBottom()->getAxisPen()->setColor(Color::fromRGB(150,150,150));
            $chart1->getChart()->getAxes()->getBottom()->getTicks()->setColor(Color::fromRGB(150,150,150));
        }
        
        ConfigureChart($chart1);        
        
        $area1=new Area($chart1->getChart());
        $area1->addArray($yValues1);
        $area1->getLinePen()->setColor(Color::fromRgb(200,200,200));
        $area1->getMarks()->setVisible(false);
        $area1->setColor(Theme::getBrightPalette()[2]);        
        $area1->setMultiArea(MultiAreas::$STACKED);                

        $area2=new Area($chart1->getChart());
        $area2->addArray($yValues2);
        $area2->getLinePen()->setColor(Color::fromRgb(200,200,200));
        $area2->getMarks()->setVisible(false);
        $area2->setColor(Theme::getBrightPalette()[3]);                
        $area2->setMultiArea(MultiAreas::$STACKED);                

        $area3=new Area($chart1->getChart());
        $area3->addArray($yValues3);
        $area3->getLinePen()->setColor(Color::fromRgb(200,200,200));
        $area3->getMarks()->setVisible(false);
        $area3->setColor(Theme::getBrightPalette()[4]);                
        $area3->setMultiArea(MultiAreas::$STACKED);                

        ColorPalettes::_applyPalette($chart1->getChart(), Theme::getBrightPalette());

        $chart1->render("chart1.png");
        
        $rand=rand();
        print '<font face="Verdana" size="2">2D Multi Area Stacked Chart<p>';        
        print '<br><img src="chart1.png?rand='.$rand.'"><p>';         
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>2D Multi Area Stacked Chart Type</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
</body>
</html>