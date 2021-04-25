/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.labo;
import SahtiTN.services.servicespecialitelabo;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;

/**
 *
 * @author oussama
 */
public class CardLaboController {
    
    private Label lb_nomPara;
    private Label lb_adresse;
    private Label lb_region;
    private Label lb_tel;
    
    labo data;
    @FXML
    private Label lb_spec_lab;
    @FXML
    private Label lb_nom_lab;
    @FXML
    private Label lb_adresse_lab;
    @FXML
    private Label lb_tel_lab;
    @FXML
    private Label lb_email_lab;
    @FXML
private AnchorPane anchor;

    public CardLaboController() throws IOException {
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("CardLabo.fxml"));
        fxmlLoader.setController(this);
        fxmlLoader.load();
        
    }
    
    public void setData(labo p){
        this.data=p;
        System.out.println(data.toString());
        
        int i =data.getIdSpecialiteLabo();
        String spec =new servicespecialitelabo().findByID(i);
        System.out.println(spec);
        lb_spec_lab.setText(spec);
        
        lb_nom_lab.setText(data.getNomLabo());
        lb_adresse_lab.setText(data.getAdresseLabo());
              
        String s = String.valueOf(data.getTelLabo());
        lb_tel_lab.setText(s);
        
        lb_email_lab.setText(data.getEmailLabo());

      
        }
     public AnchorPane getBox() {
    
        return anchor;
    } 
    
}
