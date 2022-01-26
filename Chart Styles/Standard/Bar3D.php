<?php
        //Includes
        include "../../../sources/libTeeChart.php";    

        // Args contains axis, index order to be displayed, labelText
        function handleGetAxisLabel($sender, $args)
        {
            $args[0]->getLabels()->labelText = "$".$args[2];
        }
                
        $handlers = new EventHandlerCollection();
        $handlers->add(new EventHandler(new ChartEvent('OnGetAxisLabel'),'handleGetAxisLabel'));
                  
        $chart1 = new TChart(700,450,$handlers);
        $chart1->getChart()->getAspect()->setChart3DPercent(25);        
        
        $yValues1 = Array(25,15,11,5,2,0.5);
        $yValues2 = Array(35,20,9,2,6,3);
        $xLabels = Array("January","February","March","April","May","June");
        
        function ConfigureChart($chart1)
        {
            $chart1->getChart()->getHeader()->setText("Bar 3D");
            $chart1->getChart()->getWalls()->getBack()->setTransparent(true);     
            $panel=$chart1->getChart()->getPanel();
            $panel->getBevel()->setInner(BevelStyle::$NONE);
            $panel->getBevel()->setOuter(BevelStyle::$NONE);
            $panel->getPen()->setColor(Color::fromRgb(200,200,200));
            $panel->setColor(Color::getWHITE());
            $panel->getGradient()->setVisible(false);

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
            $chart1->getChart()->getAxes()->getBottom()->getLabels()->setStyle(AxisLabelStyle::$TEXT);                    
        }
        
        ConfigureChart($chart1);
        
        $bar1=new Bar($chart1->getChart());
        $bar2=new Bar($chart1->getChart());
        $bar1->addArray($yValues1);
        $bar2->addArray($yValues2);
        $bar1->setLabels($xLabels);
        $bar2->setLabels($xLabels);
        
        $bar1->getPen()->setVisible(false);
        $bar2->getPen()->setVisible(false);
        
        $bar1->getMarks()->setVisible(false);
        $bar2->getMarks()->setVisible(false);
        $bar1->setColor(Theme::getBrightPalette()[3]);
        $bar2->setColor(Theme::getBrightPalette()[4]);
        
        $chart1->render("chart1.png");
        
        $rand=rand();
        print '<font face="Verdana" size="2">3D Multi Column Bar Chart<p>';        
        print '<br><img src="chart1.png?rand='.$rand.'"><p>';         
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>3D Multi Column Bar Chart</title>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
</body>
</html>