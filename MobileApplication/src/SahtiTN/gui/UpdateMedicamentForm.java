/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import SahtiTN.entities.Medicament;
import SahtiTN.entities.User;
import SahtiTN.services.ServiceMedicament;
import SahtiTN.tools.Session;
import java.util.Date;

/**
 *
 * @author Ennaifer Khalil
 */
public class UpdateMedicamentForm extends Form {
private int iduser;
    public UpdateMedicamentForm(Form previous,Medicament medicament,User u) {
         this.iduser = u.getId();
        setTitle("Update edicament");
        setLayout(BoxLayout.y());
  getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});
        TextField tf_nom = new TextField(medicament.getNom_medicament());
        TextField tf_desc = new TextField(medicament.getDescmedicament());
        CheckBox check_dispo = new CheckBox("Disponible");
        Picker tf_Date= new Picker();

        Button btnUpdate = new Button("Update Medicament");
        btnUpdate.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (Validatefields())
                {
                    try {
                        Medicament m = new Medicament();
                        String Nom=tf_nom.getText();
                        String Desc=tf_desc.getText();
                        int MedDispo;
                        if (check_dispo.isSelected())
                        {
                            MedDispo =1;
                        }
                        else
                        {
                            MedDispo =0;
                        }
                        Date DateMed=(Date)tf_Date.getValue();
                           
                        m.setId(medicament.getId());
                        m.setNom_medicament(Nom);
                        m.setDescmedicament(Desc);
                        m.setDispo(MedDispo);
                        m.setDate_modif(DateMed);
                        if( ServiceMedicament.getInstance().updateMedicament(m))
                            Dialog.show("Success","Connection accepted",new Command("OK"));
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                            Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    new AfficherMedicamentForm(previous,u).show();
                }
            }
        private boolean Validatefields(){
         boolean verif=true; 
            if (tf_nom.getText().isEmpty()){
               Dialog.show("Alert", "Veuillez remplir le Nom", new Command("OK"));
               verif=false;
            }
            else if (tf_desc.getText().isEmpty()){
               Dialog.show("Alert", "Veuillez remplir la Description", new Command("OK"));
               verif=false;
            }
           return verif;
       }  
            
        });
        
        addAll(tf_nom,tf_desc,check_dispo,tf_Date,btnUpdate);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK,
                e -> previous.showBack());
    }
    
}
