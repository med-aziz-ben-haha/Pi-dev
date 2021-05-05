/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.User;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.list.ContainerList;
import java.util.List;

/**
 *
 * @author LENOVO
 */
public class HomePageForm extends Form{
    Form current;
    private List list;
    private int iduser;
    private ContainerList listContainer;
    
    public HomePageForm(User u) {
        this.iduser = u.getId();
        setTitle("Accueil      ");
    current=this;    
        Label lb_espace = new Label("espace");
        lb_espace.setVisible(false);
        Label lb_espace1 = new Label("espace");
        lb_espace1.setVisible(false);
        Label lb_espace2 = new Label("espace");
        lb_espace2.setVisible(false);
                
        Button soins= new Button("     Consulter SoinMP     ");
        soins.addActionListener(new ActionListener() {

                @Override
                public void actionPerformed(ActionEvent evt) {
                    new ListCategorieSoinForm(u,current).show();
                }});
        
        
        Container holder = new Container (BoxLayout.x());
       
        holder.addAll(lb_espace,soins,lb_espace1);
        listContainer = new ContainerList();
        listContainer.setLayout(BoxLayout.yCenter());
        listContainer.setScrollableY(false);
        listContainer.setScrollVisible(true);
         Button back= new Button("     Consulter Back     ");
        back.addActionListener(new ActionListener() {

                @Override
                public void actionPerformed(ActionEvent evt) {
                    new ListCatSoinBackForm().show();
                }});
        listContainer.addAll(lb_espace2,holder,back);
        add(listContainer);
        
     
        getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());
        

    }
}
