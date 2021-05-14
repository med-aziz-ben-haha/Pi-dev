/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.MyApplication;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BorderLayout;

/**
 *
 * @author LENOVO
 */
public class HomePageBackForm extends Form {

    public HomePageBackForm() {
    super(new BorderLayout(BorderLayout.CENTER_BEHAVIOR_CENTER_ABSOLUTE));
        setTitle("AdminPanel");
        Label lb = new Label("Bienvenue ");
        getToolbar().addMaterialCommandToOverflowMenu("Se deconnecter", FontImage.MATERIAL_LOGOUT, e -> new LoginForm(MyApplication.theme).show());
        add(BorderLayout.CENTER,lb);
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {
        });
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {
        });
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {
        });
        getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {
            new ListCatSoinBackForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {
            new ListSoinBackForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu(" Statistiques SoinMP", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
            new StatSoinForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu(" Statistiques User", FontImage.MATERIAL_GRAPHIC_EQ, (event) -> {
            new StatUserForm().show();
        });
        getToolbar().addMaterialCommandToSideMenu("Réclamations", FontImage.MATERIAL_COMMENT, (event) -> {
            new GestionReclamationForm().show();
        });
    }

}
