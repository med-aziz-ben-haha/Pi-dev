/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.CategorieSoinMP;
import SahtiTN.entities.SoinMP;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;

import com.lowagie.text.BadElementException;
import java.lang.String;
import java.io.IOException;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.text.TextAlignment;
import com.twilio.Twilio;
import com.twilio.rest.api.v2010.account.Message;
import com.twilio.type.PhoneNumber;
import javafx.scene.text.Text;
import javafx.scene.text.TextFlow;


/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class CardController implements Initializable {

    @FXML
    private Label espace;
    @FXML
    private Label titre;
    @FXML
    private TextFlow description;
    @FXML
    private Label adresse;
    @FXML
    private Button b;
    @FXML
    private ImageView image;

    CategorieSoinMP data;
    SoinMP dataSoinMP;

    public Button getB() {
        return b;
    }

    public void setDataCat(CategorieSoinMP data) {
        this.data = data;
        titre.setText(data.getLibelle_categorie_soin_mp());
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + data.getLien_icone_csmp()));
        b.setId(Integer.toString(data.getId()));

    }

    public void setDataSoinMP(SoinMP dataSoinMP) {
        this.dataSoinMP = dataSoinMP;
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + dataSoinMP.getLien_image_smp()));
        titre.setText(dataSoinMP.getTitre_soin_mp());
        description.getChildren().add(new Text(dataSoinMP.getDescription_soin_mp()));
        adresse.setText(dataSoinMP.getAdresse_soin_mp());
        b.setId(Integer.toString(dataSoinMP.getId()));
    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void envoi_soinMP(ActionEvent event) {
        
           if (dataSoinMP != null) {
            try {

                AfficherSoinMPDetailsFrontController.sesoinId(b.getId());

                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMPDetailsFront.fxml"));
                //récupération du root  à partir du fichier fxml

                Parent root = loader.load();
                //récupération du controller lier au fichier fxml

                AfficherSoinMPDetailsFrontController dpc = loader.getController();
                //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
                espace.getScene().setRoot(root);

            } catch (IOException ex) {
                Logger.getLogger(CardController.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
        
        
        if (data!=null){
        try {

            AfficherSoinMPFrontController.setCatSoinId(b.getId());
                        
            //récupération fichier fxml
            
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMPFront.fxml"));
            //récupération du root  à partir du fichier fxml
           
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            
            AfficherSoinMPFrontController dpc = loader.getController();
            //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
            espace.getScene().setRoot(root);
           
        } catch (IOException ex) {
            Logger.getLogger(CardController.class.getName()).log(Level.SEVERE, null, ex);
        }
     
    }
    }

}
