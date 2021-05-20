/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import SahtiTN.entities.Reclamation;
import SahtiTN.entities.User;
import SahtiTN.services.serviceReclamation;
import SahtiTN.tools.Session;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import java.util.ArrayList;

/**
 *
 * @author LENOVO
 */
public class ListReclamationFrontForm extends Form {
    Form current; 
    
     public  ListReclamationFrontForm(Form previous,User u )  {
    current= this ;
         getToolbar().addMaterialCommandToOverflowMenu("Profil", FontImage.MATERIAL_EDIT, e -> new ProfilForm(u,current).show());

        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});     
       setTitle("Liste des réclamations");
  
        serviceReclamation es = new serviceReclamation();
        ArrayList<Reclamation> list = es.getAllReclamation();

        {
           
            for (Reclamation r : list) {

          
 
                Container c3 = new Container(BoxLayout.y());
             
                SpanLabel reclamation= new SpanLabel("Réclamation:\n" + r.getDescription_reclamation());

               
                  
         c3.add(reclamation);
                      
                 Button Delete =new Button("Supprimer","LoginButton");
         c3.add(Delete);
            Delete.getAllStyles().setBgColor(0xF36B08);
            Delete.addActionListener((ActionEvent e) -> {
               Dialog alert = new Dialog("Warning");
                SpanLabel message = new SpanLabel("Etes vous sur de vouloir supprimer cette réclamation ?\nThis action once done cannot be reverted!");
                alert.add(message);
                Button ok = new Button("Proceed");
                Button cancel = new Button(new Command("Fermer"));
                //User clicks on ok to delete account
                ok.addActionListener(new ActionListener() {
                  
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                       es.Delete(r.getId());
                     
                        alert.dispose();
                        refreshTheme();
                    }

              
                    
                }
                
                
                );

                alert.add(cancel);
                alert.add(ok);
                alert.showDialog();
                
                new ListReclamationForm(previous).show();
              
                
             
            });       
           System.out.println("");
              
  add(c3);
              
            
          getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
            }
          
        }
     
    }
    
}
