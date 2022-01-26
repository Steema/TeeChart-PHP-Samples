<?php
        //Includes
        include "../../../sources/libTeeChart.php";            
          
        $chart1 = new TChart(700,450);
        $yValues = Array(55,25,11,5,2,0.5);
        $xLabels = Array("Apples","Oranges","Cherry","Pears","Bananas","Raspberries");
        
        function ConfigureChart($chart1)
        {
            $chart1->getAspect()->setView3D(true);
            $chart1->getChart()->getHeader()->setText("3D Area Chart");
            $chart1->getChart()->getWalls()->getBack()->setTransparent(true);     
            
            $panel=$chart1->getChart()->getPanel();
            $panel->getBevel()->setInner(BevelStyle::$NONE);
            $panel->getBevel()->setOuter(BevelStyle::$NONE);
            $panel->getPen()->setColor(Color::fromRgb(200,200,200));
            $panel->setColor(Color::getWHITE());
            $panel->getGradient()->setVisible(false);
            
            $chart1->getChart()->getAxes()->getBottom()->getLabels()->setStyle(AxisLabelStyle::$TEXT);        
            $chart1->getChart()->getLegend()->setVisible(false);
            
            $chart1->getChart()->getHeader()->setVisible(false);
            
            $chart1->getChart()->getAxes()->getLeft()->setIncrement(10);
            $chart1->getChart()->getAxes()->getLeft()->getAxisPen()->setColor(Color::fromRGB(150,150,150));
            $chart1->getChart()->getAxes()->getLeft()->getLabels()->getFont()->setColor(Color::fromRgb(120,120,120));
            $chart1->getChart()->getAxes()->getLeft()->getTicks()->setColor(Color::fromRGB(150,150,150));
            
            $chart1->getChart()->getAxes()->getBottom()->getGrid()->setVisible(false);        
            $chart1->getChart()->getAxes()->getBottom()->getLabels()->getFont()->setColor(Color::fromRgb(120,120,120));
            $chart1->getChart()->getAxes()->getBottom()->getAxisPen()->setColor(Color::fromRGB(150,150,150));
            $chart1->getChart()->getAxes()->getBottom()->getTicks()->setColor(Color::fromRGB(150,150,150));
        }
        
        ConfigureChart($chart1);        
        
        $area=new Area($chart1->getChart());
        $area->addArray($yValues);
        $area->setLabels($xLabels);        
        $area->getLinePen()->setColor(Color::fromRgb(200,200,200));
        $area->getMarks()->setVisible(false);
        $area->setColorEach(true);
        
        ColorPalettes::_applyPalette($chart1->getChart(), Theme::getBrightPalette());

        $chart1->render("chart1.png");
        
        $rand=rand();
        print '<font face="Verdana" size="2">3D Area Chart<p>';        
        print '<br><img src="chart1.png?rand='.$rand.'"><p>';         
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Area 3D Chart Type</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
</body>
</html>