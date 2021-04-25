/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Medicament;
import SahtiTN.services.MedicamentService;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.ProtocolException;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ResourceBundle;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.CheckBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.WritableImage;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import rest.file.uploader.tn.FileUploader;

/**
 * FXML Controller class
 *
 * @author Ennaifer Khalil
 */
public class UpdateMedicamentController implements Initializable {

    @FXML
    private Button bt_updateMedicament2;
    @FXML
    private TextField tf_update_nom_medicament;
    @FXML
    private TextArea tf_update_desc;
    @FXML
    private DatePicker tf_update_date_modif;
    @FXML
    private TextField tf_update_image;
    @FXML
    private CheckBox check_update_dispo;
    @FXML
    private TextField tf_id;
    @FXML
    private Button bt_uploadImage2;
    private File file ;
    private FileChooser uploadPic;
    private File picPath;
    private String imgUrl ="";

    public void setTf_update_nom_medicament(String tf_update_nom_medicament) {
        this.tf_update_nom_medicament.setText(tf_update_nom_medicament);
    }

    public void setTf_update_desc(String tf_update_desc) {
        this.tf_update_desc.setText(tf_update_desc);
    }

    public void setCheck_update_dispo(int check_update_dispo) {
        if (check_update_dispo==1)
        {
           this.check_update_dispo.setSelected(true); 
        }
        else
        {
            this.check_update_dispo.setSelected(false); 
        }
    }

    public void setTf_id(int tf_id) {
        this.tf_id.setText(String.valueOf(tf_id));
    }


    public void setTf_update_date_modif(LocalDate tf_update_date_modif) {
        this.tf_update_date_modif.setValue(tf_update_date_modif);
    }
    public void setTf_update_image(String tf_update_image) {
        this.tf_update_image.setText(tf_update_image);
    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void updateMedicament(ActionEvent event) throws SQLException {
        // SAUVEGARDE DANS LA BASE
        MedicamentService Mc = new MedicamentService();
        Medicament medicament = new Medicament();
        
        int id= parseInt(tf_id.getText());
        String MedNom =  tf_update_nom_medicament.getText();
        LocalDate MedDate = tf_update_date_modif.getValue();
        int MedDispo;
        if (check_update_dispo.isSelected())
        {
             MedDispo =1;
        }
        else
        {
             MedDispo =0;
        }
        String MedDesc = tf_update_desc.getText();
        String MedImage = tf_update_image.getText();
        if(Validatefields()){    
            medicament.setNom_medicament(MedNom);        
            medicament.setDate_modif(MedDate);
            medicament.setDispo(MedDispo);
            medicament.setDescmedicament(MedDesc);
            medicament.setImg_medicament(MedImage);
        
            Mc.updateMedicament(medicament,id);
        
            Stage stage = (Stage) bt_updateMedicament2.getScene().getWindow();
            stage.close();
        }
         
    }
    private boolean Validatefields(){
         boolean verif=true; 
            if (tf_update_nom_medicament.getText().isEmpty()){
               Alert alert = new Alert(Alert.AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir le nom");
               alert.showAndWait();
               verif=false;
            }
            if (tf_update_desc.getText().isEmpty()){
               Alert alert = new Alert(Alert.AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir la Description");
               alert.showAndWait();
               verif=false;
            }
            if (tf_update_date_modif.getEditor().getText().isEmpty()){
               Alert alert = new Alert(Alert.AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir la Date");
               alert.showAndWait();
               verif=false;
           }
           return verif;
       }  

    @FXML
    private void uploadImage2(ActionEvent event) throws ProtocolException, IOException {
        Stage stage = (Stage)((Node)event.getSource()).getScene().getWindow();
        uploadPic = new FileChooser();
        uploadPic.setTitle("Select the image you want to add");
        picPath = uploadPic.showOpenDialog(stage);
        System.out.println(picPath.toString());
        try {
            imgUrl = picPath.toURI().toURL().toExternalForm();
            tf_update_image.setText(imgUrl);
            BufferedImage buffImage = ImageIO.read(picPath);
            Image up = SwingFXUtils.toFXImage(buffImage, null);
        } catch(IOException ex){
            System.err.println(ex.getMessage());
        }             
    }
    
}
