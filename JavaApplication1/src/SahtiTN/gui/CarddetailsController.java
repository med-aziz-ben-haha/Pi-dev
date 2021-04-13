/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.SoinMP;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
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

    public void setDataSoinMP(SoinMP dataSoinMP) {
        this.dataSoinMP = dataSoinMP;
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + dataSoinMP.getLien_image_smp()));
        titre.setText(dataSoinMP.getTitre_soin_mp());
        description.getChildren().add(new Text(dataSoinMP.getDescription_soin_mp()));
        adresse.setText(dataSoinMP.getAdresse_soin_mp());
        btn_captcha.setId(Integer.toString(dataSoinMP.getId()));

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
    }

}
