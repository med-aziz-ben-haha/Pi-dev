/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import SahtiTN.entities.Ordonnance;
import SahtiTN.entities.User;
import SahtiTN.services.ServiceOrdonnance;
import SahtiTN.tools.Session;

/**
 *
 * @author Ennaifer Khalil
 */
public class UpdateOrdonnanceForm extends Form {
private int iduser;
    public UpdateOrdonnanceForm(Form previous,Ordonnance ordonnance,User u) {
         this.iduser = u.getId();
        setTitle("Update Ordonnance");
        setLayout(BoxLayout.y());
      getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});
        TextField tf_Contenu = new TextField(ordonnance.getContenu());
        Picker tf_Date= new Picker();
        
        Button btnUpdate = new Button("Update Ordonnance");
        btnUpdate.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (Validatefields())
                {
                    try {
                        Ordonnance o = new Ordonnance();
                        String Contenu=tf_Contenu.getText();
                        
                        o.setId(ordonnance.getId());
                        o.setContenu(Contenu);
                        
                        if( ServiceOrdonnance.getInstance().updateOrdonnance(o))
                            Dialog.show("Success","Connection accepted",new Command("OK"));
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    new AfficherOrdonnanceForm(previous,u).show();
                }
            }
         private boolean Validatefields(){
         boolean verif=true; 
            if (tf_Contenu.getText().isEmpty()){
               Dialog.show("Alert", "Veuillez remplir le Contenu de l'Ordonnance", new Command("OK"));
               verif=false;
            }
           return verif;
       }     
            
        });
        
        addAll(tf_Contenu,tf_Date,btnUpdate);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                e -> previous.showBack());
    }
    
    
}
