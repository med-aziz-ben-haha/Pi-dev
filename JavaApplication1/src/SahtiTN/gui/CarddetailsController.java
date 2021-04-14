/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.CaptchaSoin;
import SahtiTN.entities.SoinMP;
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
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.text.Text;
import javafx.scene.text.TextFlow;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class CarddetailsController implements Initializable {

    @FXML
    private Label titre;
    @FXML
    private TextFlow description;
    @FXML
    private Label adresse;
    @FXML
    private ImageView Captcha;
    @FXML
    private Label espace;
    @FXML
    private TextField Captchatext;
    @FXML
    private Button btn_captcha;
    @FXML
    private ImageView image;

    SoinMP dataSoinMP;
    CaptchaSoin dataCaptcha;

    public void setDataSoinMP(SoinMP dataSoinMP, CaptchaSoin dataCaptcha) {

        this.dataSoinMP = dataSoinMP;
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + dataSoinMP.getLien_image_smp()));
        titre.setText(dataSoinMP.getTitre_soin_mp());
        description.getChildren().add(new Text(dataSoinMP.getDescription_soin_mp()));
        adresse.setText(dataSoinMP.getAdresse_soin_mp());
        btn_captcha.setId(dataCaptcha.getValue());
        espace.setId(Integer.toString(dataSoinMP.getId()));
        Captcha.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public" + dataCaptcha.getLien_image_captcha()));
     

    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void envoi_Soin_detail_note(ActionEvent event) {
        String Captchatexte = Captchatext.getText();
        if (Captchatexte.equals(btn_captcha.getId())) {
            try {

                AfficherSoinMPDetailsFrontController.sesoinId(espace.getId());

                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMPDetailsNote.fxml"));
                //récupération du root  à partir du fichier fxml

                Parent root = loader.load();
                //récupération du controller lier au fichier fxml

                AfficherSoinMPDetailsNoteController dpc = loader.getController();
                //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
                espace.getScene().setRoot(root);

            } catch (IOException ex) {
                Logger.getLogger(CardController.class.getName()).log(Level.SEVERE, null, ex);
            }
        } else {
            Alert alert = new Alert(Alert.AlertType.ERROR);
            

            alert.setContentText("Captcha n'est pas Valide !");
            alert.showAndWait();
            try {

                AfficherSoinMPDetailsFrontController.sesoinId(espace.getId());

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
    }

}
