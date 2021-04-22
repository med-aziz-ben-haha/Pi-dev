/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.Medicament;
import SahtiTN.entities.Ordonnance;
import SahtiTN.services.MedicamentService;
import SahtiTN.services.OrdonnanceService;
import static java.lang.Integer.parseInt;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.ListView;
import javafx.scene.control.SelectionMode;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Ennaifer Khalil
 */
public class UpdateOrdonnanceController implements Initializable {

    @FXML
    private TextArea tf_update_contenu;
    @FXML
    private DatePicker tf_update_dateOrdonnance;
    @FXML
    private Button bt_updateOrdonnance2;
    @FXML
    private TextField tf_idOrd;
    @FXML
    private ListView<String> list_medicament2;

    public void setTf_update_contenu(String tf_update_contenu) {
        this.tf_update_contenu.setText(tf_update_contenu);
    }

    public void setTf_update_dateOrdonnance(LocalDate tf_update_dateOrdonnance) {
        this.tf_update_dateOrdonnance.setValue(tf_update_dateOrdonnance);
    }

    public void setTf_idOrd(int tf_idOrd) {
        this.tf_idOrd.setText(String.valueOf(tf_idOrd));
    }

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        afficherlisteMedicament();
    }    

        private void afficherlisteMedicament(){
        OrdonnanceService Oc=new OrdonnanceService();
        ObservableList<String> listeMedicament = Oc.afficherlisteMedicament();
        list_medicament2.setItems(listeMedicament);
        list_medicament2.getSelectionModel().setSelectionMode(SelectionMode.MULTIPLE);
    }
    @FXML
    private void updateOrdonnace(ActionEvent event) throws SQLException {
         // SAUVEGARDE DANS LA BASE
        OrdonnanceService Oc = new OrdonnanceService();
        Ordonnance ordonnance = new Ordonnance();
        
        int id= parseInt(tf_idOrd.getText());
        String contenu =  tf_update_contenu.getText();
        LocalDate date_ord = tf_update_dateOrdonnance.getValue();
        String ord_listeMedicament ="";
            ObservableList<String> listeMedicament= list_medicament2.getSelectionModel().getSelectedItems();
            for (String m:listeMedicament)
            {
                ord_listeMedicament+= m+" " ;
            }
        
        ordonnance.setContenu(contenu);
        ordonnance.setDateOrdonnance(date_ord);
        ordonnance.setListe_medicament(ord_listeMedicament);
        Oc.updateOrdonnance(ordonnance,id);
        
        Stage stage = (Stage) bt_updateOrdonnance2.getScene().getWindow();
        stage.close();
  
    }
     private boolean Validatefields(){
         boolean verif=true; 
            if (tf_update_contenu.getText().isEmpty()){
               Alert alert = new Alert(Alert.AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir le contenu de l'ordonnance");
               alert.showAndWait();
               verif=false;
            }
            if (tf_update_dateOrdonnance.getEditor().getText().isEmpty()){
               Alert alert = new Alert(Alert.AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir la Date");
               alert.showAndWait();
               verif=false;
           }
           return verif;
       }
    
}
