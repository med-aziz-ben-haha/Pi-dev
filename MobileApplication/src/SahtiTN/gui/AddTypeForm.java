/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import SahtiTN.entities.TypeReclamation;
import SahtiTN.services.serviceType;
import SahtiTN.gui.mailUtil;
import SahtiTN.tools.Session;
import com.codename1.components.ToastBar;


/**
 *
 * @author bhk
 */
public class AddTypeForm extends Form{

    public AddTypeForm(Form previous)  {
        /*
        Le paramètre previous définit l'interface(Form) précédente.
        Quelque soit l'interface faisant appel à AddTask, on peut y revenir
        en utilisant le bouton back
        */
       
                          getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> {new LoginForm(MyApplication.theme).show(); Session.getSession().clearSession();});

          
        setTitle("Ajouter un nouveau Type ");
        setLayout(BoxLayout.y());
        
   TextField type=new TextField("","veillez entrer votre type");
        type.setUIID("TextFieldBlack");
        addStringValue("Type",type);
        
           Button btnAjouter=new Button("Ajouter");
        addStringValue("",btnAjouter);
    
        btnAjouter.addActionListener(new ActionListener()
         
           
        {
           
            
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((type.getText().length()==0))
                    Dialog.show("Alerte", "veillez remplir les champs", new Command("OK"));
                else
                {
                    try {
                        TypeReclamation t = new TypeReclamation( String.valueOf(type.getText()).toString());
                        if( serviceType.getInstance().addTask(t)){
                            Dialog.show("Success","Ajout avec succées",new Command("OK"));
                        ToastBar.showMessage("Votre type est ajouté", FontImage.MATERIAL_ACCESS_TIME);}
                        else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
   
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK
                , e-> previous.showBack()); // Revenir vers l'interface précédente
                
    }

    private void addStringValue(String s ,Component v) {
         add(BorderLayout.west  (new Label(s,"PaddedLabel")).add(BorderLayout.CENTER,v));
    }
    
    
}

 


    
    

