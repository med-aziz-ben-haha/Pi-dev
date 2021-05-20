/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.SoinMP;
import SahtiTN.services.SoinMPCrud;
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
import javafx.scene.text.Text;
import javafx.scene.text.TextFlow;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class TabSoinBackController implements Initializable {

    @FXML
    private ImageView image;
    @FXML
    private TextFlow titre;
    @FXML
    private TextFlow categorie;
    @FXML
    private TextFlow description;
    @FXML
    private TextFlow adresse;
    @FXML
    private Button btn_modifier;
    @FXML
    private Button btn_supprimer;
    SoinMP dataSoinMP;
    SoinMPCrud s = new SoinMPCrud();

    public void setDataSoinMP(SoinMP dataSoinMP) {
        this.dataSoinMP = dataSoinMP;
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\Pi-dev\\ProjetPidev\\public\\uploads\\" + dataSoinMP.getLien_image_smp()));
        titre.getChildren().add(new Text(dataSoinMP.getTitre_soin_mp()));
        description.getChildren().add(new Text(dataSoinMP.getDescription_soin_mp()));
         categorie.getChildren().add(new Text(s.cherchercattitre(dataSoinMP.getCategorie_soin_mp_id())));
        adresse.getChildren().add(new Text(dataSoinMP.getAdresse_soin_mp()));
        btn_supprimer.setId(Integer.toString(dataSoinMP.getId()));
        btn_modifier.setId(Integer.toString(dataSoinMP.getId()));
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
           ModifierSoinMPController.setSoinId(Integer.parseInt(btn_modifier.getId()));
            try {
                //récupération fichier fxml
                FXMLLoader loader = new FXMLLoader(getClass().getResource("ModifierSoinMP.fxml"));
                //récupération du root  à partir du fichier fxml

                Parent root = loader.load();
                //récupération du controller lier au fichier fxml

                ModifierSoinMPController dpc = loader.getController();
                //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
                btn_supprimer.getScene().setRoot(root);

            } catch (IOException ex) {
                Logger.getLogger(TabSoinBackController.class.getName()).log(Level.SEVERE, null, ex);
            }
    }

    @FXML
    private void envoi_supprimer(ActionEvent event) {
         
          
        s.supprimerSoinMP(Integer.parseInt(btn_supprimer.getId()));
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml

            Parent root = loader.load();
            //récupération du controller lier au fichier fxml

            AfficherSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
            btn_supprimer.getScene().setRoot(root);

        } catch (IOException ex) {
            Logger.getLogger(TabCatSoinBackController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }
    

}
