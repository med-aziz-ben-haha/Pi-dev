/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import CubicChart.CubicChart;
import SahtiTN.MyApplication;
import SahtiTN.entities.SoinMP;
import SahtiTN.services.SoinService;
import SahtiTN.tools.Session;
import com.codename1.charts.ChartComponent;
import com.codename1.charts.models.CategorySeries;
import com.codename1.charts.renderers.DefaultRenderer;
import com.codename1.charts.renderers.SimpleSeriesRenderer;
import com.codename1.charts.util.ColorUtil;
import com.codename1.charts.views.LineChart;
import com.codename1.charts.views.PieChart;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import java.util.ArrayList;
import java.util.List;
import javafx.scene.chart.XYChart.Series;

/**
 *
 * @author LENOVO
 */
public class StatSoinForm extends Form{
 Form Current;
    List <SoinMP> m =new ArrayList(SoinService.getInstance().statdata());  
   Label label1 ;
   Label label2 ;
   
public StatSoinForm() {
    super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
  getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});        CubicChart c = new CubicChart();
         Container titre = new Container (BoxLayout.y());
       Container  titres = new Container (BoxLayout.y());
       Container  all = new Container (BoxLayout.y());
    
       titres.setLayout(BoxLayout.y());    
            for (int i=1 ;i<m.size()/2+1;i++)
        {label1=new Label();label2=new Label();
            label1.setText(i +m.get(i-1).getTitre_soin_mp()+"   ");
        titre.add(label1);
        label2.setText((i+1)+m.get(i).getTitre_soin_mp());
        
                titre.add(label2);
               
        }
           for (int i=m.size()/2 ;i<m.size();i++)
        {label1=new Label();label2=new Label();
        label1.setText(i +m.get(i-1).getTitre_soin_mp()+"   ");
        
        titres.add(label1);
                if (m.get(i)!=null){
                     label2.setText((i+1)+m.get(i).getTitre_soin_mp());
                titres.add(label2);
                }
        }
      
      Container titreX= new Container(BoxLayout.x());
      titreX.addAll(titre,titres);
      all.addAll(c.execute(),titreX);
      

    this.add(BorderLayout.CENTER, all);
      getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> new HomePageBackForm().showBack());

}
    
}
