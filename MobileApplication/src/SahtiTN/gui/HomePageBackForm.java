/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import com.codename1.ui.FontImage;
import com.codename1.ui.Form;

/**
 *
 * @author LENOVO
 */
public class HomePageBackForm extends Form{

    public HomePageBackForm() {
        setTitle("AdminPanel");
        getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
         getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
         getToolbar().addCommandToSideMenu(" ", null, (event) -> {});
         getToolbar().addMaterialCommandToSideMenu("Categorie SoinMP", FontImage.MATERIAL_CATEGORY, (event) -> {new ListCatSoinBackForm().show();});
         getToolbar().addMaterialCommandToSideMenu(" SoinMP", FontImage.MATERIAL_ASSISTANT_DIRECTION, (event) -> {new ListSoinBackForm().show();});
    }
    

}
