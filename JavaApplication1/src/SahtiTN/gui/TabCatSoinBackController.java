/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.services.CategorieSoinMPCrud;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class TabCatSoinBackController implements Initializable {

    @FXML
    private ImageView image;
    @FXML
    private Label titre;
    @FXML
    private Button btn_modifier;
    @FXML
    private Button btn_supprimer;
    CategorieSoinMP data;
    
     public void setDataCat(CategorieSoinMP data) {
        this.data = data;
        titre.setText(data.getLibelle_categorie_soin_mp());
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\Pi-dev\\ProjetPidev\\public\\uploads\\" + data.getLien_icone_csmp()));
        btn_supprimer.setId(Integer.toString(data.getId()));
        btn_modifier.setId(Integer.toString(data.getId()));
    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void envoi_modifier(ActionEvent event) {

        

       try {
            ModifierCategorieSoinMPController.setCatSoinId(btn_modifier.getId());

            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("ModifierCategorieSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml

            Parent root = loader.load();
            //récupération du controller lier au fichier fxml

            ModifierCategorieSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
            btn_modifier.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(TabCatSoinBackController.class.getName()).log(Level.SEVERE, null, ex);
        }

       

    }

    @FXML
    private void envoi_supprimer(ActionEvent event) {
        CategorieSoinMPCrud c = new CategorieSoinMPCrud();

        c.deleteCategorieSoinMP(Integer.parseInt(btn_supprimer.getId()));
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml

            Parent root = loader.load();
            //récupération du controller lier au fichier fxml

            AfficherCategorieSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
            btn_supprimer.getScene().setRoot(root);

        } catch (IOException ex) {
            Logger.getLogger(TabCatSoinBackController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    

}
