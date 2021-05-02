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
import java.util.Optional;
import java.util.ResourceBundle;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.DatePicker;
import javafx.scene.control.ListView;
import javafx.scene.control.SelectionMode;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
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
        tf_update_dateOrdonnance.setEditable(false);
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
        
        ordonnance.setContenu(contenu);
        ordonnance.setDateOrdonnance(date_ord);
        Oc.updateOrdonnance(ordonnance,id);
        
        ObservableList<String> listeMedicament= list_medicament2.getSelectionModel().getSelectedItems();
        if (!listeMedicament.isEmpty())
        {
            // fasa5 
            Oc.DeleteFrom_Ord_Med(id);
            // fasa5
            for (String m:listeMedicament)
            {
            Oc.InsertInto_Ord_Med(id,Oc.GetIdFrom_Medicament(m));
            }
        }
        
        
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

    @FXML
    private void ControlDatePicker(MouseEvent event) {
        if (!(tf_update_dateOrdonnance.isEditable())){
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Confirmation Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Voulez vous changer la date du systeme ?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == ButtonType.OK){
            tf_update_dateOrdonnance.setEditable(true);
       } else {
            tf_update_dateOrdonnance.setEditable(false);
       }    
    }
    }
    
}
