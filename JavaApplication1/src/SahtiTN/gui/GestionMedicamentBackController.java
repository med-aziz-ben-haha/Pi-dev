/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;


import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.TextField;
import SahtiTN.services.MedicamentService;
import SahtiTN.entities.Medicament;
import SahtiTN.tools.MyConnection;
import SahtiTN.tools.Session;
import com.lowagie.text.Document;
import com.lowagie.text.DocumentException;
import com.lowagie.text.Phrase;
import com.lowagie.text.pdf.PdfPCell;
import com.lowagie.text.pdf.PdfPTable;
import com.lowagie.text.pdf.PdfWriter;
import static com.sun.xml.internal.fastinfoset.alphabet.BuiltInRestrictedAlphabets.table;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.ProtocolException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.Date;
import java.util.Locale;
import java.util.Optional;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.embed.swing.SwingFXUtils;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.CheckBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TablePosition;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.WritableImage;
import javafx.scene.input.InputMethodEvent;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import rest.file.uploader.tn.FileUploader;

/**
 * FXML Controller class
 *
 * @author Ennaifer Khalil
 */
public class GestionMedicamentBackController implements Initializable {

    private TextField tf_dispo;
    @FXML
    private TextArea tf_desc;
    @FXML
    private TextField tf_image;
    @FXML
    private TextField tf_nom_medicament;
    @FXML
    private DatePicker tf_date_modif;
    @FXML
    private TableView<Medicament> tab_medicament;
    @FXML
    private TableColumn<Medicament,Integer> id_col;
    @FXML
    private TableColumn<Medicament, String> nom_medicament_col;
    @FXML
    private TableColumn<Medicament, String> descmedicament_col;
    @FXML
    private TableColumn<Medicament, Integer> dispo_col;
    @FXML
    private TableColumn<Medicament, LocalDate> date_modif_col;
    @FXML
    private TableColumn<Medicament, String> image_col;
    @FXML
    private Button bt_afficherMedicament;
    @FXML
    private Button bt_supprimerMedicament;
    @FXML
    private Button bt_ajouterMedicament;
    @FXML
    private Button bt_updateMedicament;
    @FXML
    private CheckBox check_dispo;
    @FXML
    private TextField tf_rechercher;
    @FXML
    private Button bt_exportExcel;
    private FileInputStream fis;
    private File file ;
    @FXML
    private AnchorPane home;
    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private Button bt_exportPDF;
    @FXML
    private Button bt_uploadImage;
    @FXML
    private Button bt_triMedicament;
    @FXML
    private ComboBox<String> methodeTri;
    @FXML
    private CheckBox check_methodeTri;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        afficherMedicament();
        tf_date_modif.setValue(LocalDate.now());
        tf_date_modif.setEditable(false);
        methodeTri.setValue("nom_medicament");
        methodeTri.getItems().addAll(
        "dispo",
        "date_modif",
        "nom_medicament"
        );
    } 
    
    @FXML
    public void afficherMedicament()
    {
        MedicamentService Mc=new MedicamentService();
        ObservableList<Medicament> medicaments = Mc.afficherMedicament();
        id_col.setCellValueFactory(new PropertyValueFactory<Medicament,Integer>("id"));
        nom_medicament_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("nom_medicament"));
        descmedicament_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("descmedicament"));
        dispo_col.setCellValueFactory(new PropertyValueFactory<Medicament,Integer>("dispo"));
        date_modif_col.setCellValueFactory(new PropertyValueFactory<Medicament,LocalDate>("date_modif"));
        image_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("img_medicament"));
        
        tab_medicament.setItems(medicaments);
    }
    
    @FXML
    private void ajouterMedicament(ActionEvent event) {

        // SAUVEGARDE DANS LA BASE
        MedicamentService Mc = new MedicamentService();
        Medicament m = new Medicament();
        String MedNom = tf_nom_medicament.getText();
        LocalDate MedDate = tf_date_modif.getValue();
        int MedDispo;
        if (check_dispo.isSelected())
        {
             MedDispo =1;
        }
        else
        {
             MedDispo =0;
        }
        String MedDesc = tf_desc.getText();
        String MedImage = tf_image.getText();
        if(Validatefields()){
            m.setNom_medicament(MedNom);        
            m.setDate_modif(MedDate);
            m.setDispo(MedDispo);
            m.setDescmedicament(MedDesc);
            m.setImg_medicament(MedImage);
        
            Mc.ajouterMedicament(m);
            afficherMedicament();
            tf_nom_medicament.clear();
            tf_date_modif.setValue(LocalDate.now());
            tf_date_modif.setEditable(false);
            tf_desc.clear();
            tf_image.clear();
            Alert alert = new Alert(AlertType.INFORMATION);
            alert.setTitle("Ajouter médicament");
            alert.setHeaderText(null);
            alert.setContentText("Médicament ajouté avec succés !");
            alert.showAndWait();
        }
    }
    
    private boolean Validatefields(){
         boolean verif=true; 
            if (tf_nom_medicament.getText().isEmpty()){
               Alert alert = new Alert(AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir le nom");
               alert.showAndWait();
               verif=false;
            }
            if (tf_desc.getText().isEmpty()){
               Alert alert = new Alert(AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir la Description");
               alert.showAndWait();
               verif=false;
            }
            if (tf_date_modif.getEditor().getText().isEmpty()){
               Alert alert = new Alert(AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez remplir la Date");
               alert.showAndWait();
               verif=false;
           }
            if (tf_image.getText().isEmpty()){
               Alert alert = new Alert(AlertType.WARNING);
               alert.setTitle("Validate Fields");
               alert.setHeaderText(null);
               alert.setContentText("Veuillez choisir une image");
               alert.showAndWait();
               verif=false;
            }
            
           return verif;
       }  


    @FXML
    private void supprimerMedicament(ActionEvent event) throws SQLException {
      Medicament medicament = tab_medicament.getSelectionModel().getSelectedItem();
      if (medicament==null)
      {
        Alert alert = new Alert(AlertType.WARNING);
        alert.setTitle("Supprimer médicament");
        alert.setHeaderText(null);
        alert.setContentText("Veuillez sélectionner un médicament");
        alert.showAndWait();
      }
      else
      {
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Supprimer médicament");
        alert.setHeaderText(null);
        alert.setContentText("Voulez vous supprimer ce médicament ?");
        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == ButtonType.OK){
            MedicamentService Mc=new MedicamentService();
            Mc.supprimerMedicament(medicament.getId());
            afficherMedicament(); 
        }
        else
        {
            Alert alert2 = new Alert(AlertType.WARNING);
            alert2.setTitle("Supprimer médicament");
            alert2.setHeaderText(null);
            alert2.setContentText("La suppression a ete annulé");
            alert2.showAndWait();
        }  
      }
    }
    
    

    @FXML
    private void updateWindow(ActionEvent event) {
        Medicament medicament = tab_medicament.getSelectionModel().getSelectedItem();
        if (medicament==null){
            Alert alert = new Alert(AlertType.WARNING);
            alert.setTitle("Mise a jour médicament");
            alert.setHeaderText(null);
            alert.setContentText("Veuillez sélectionner un médicament");
            alert.showAndWait();
        }
        else{
            try {
                FXMLLoader fxmlloader=new FXMLLoader(getClass().getResource("UpdateMedicament.fxml"));
                Parent root1= (Parent) fxmlloader.load();
            
                UpdateMedicamentController UC= fxmlloader.getController();
                UC.setTf_id(medicament.getId());
                UC.setTf_update_nom_medicament(medicament.getNom_medicament());
                UC.setTf_update_desc(medicament.getDescmedicament());
                UC.setCheck_update_dispo(medicament.getDispo());
                UC.setTf_update_date_modif(medicament.getDate_modif());
                UC.setTf_update_image(medicament.getImg_medicament());
            
                Stage stage = new Stage();
                stage.setTitle("UpdateMedicament");
                stage.setScene(new Scene(root1));
                stage.show();
                }
        catch (IOException e) {
            e.printStackTrace();
            }
        }
    }
    @FXML
    private void rechercheMedicament(KeyEvent event) {
        MedicamentService Mc=new MedicamentService();
        ObservableList<Medicament> medicaments = Mc.rechercheMedicament(tf_rechercher.getText());
        id_col.setCellValueFactory(new PropertyValueFactory<Medicament,Integer>("id"));
        nom_medicament_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("nom_medicament"));
        descmedicament_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("descmedicament"));
        dispo_col.setCellValueFactory(new PropertyValueFactory<Medicament,Integer>("dispo"));
        date_modif_col.setCellValueFactory(new PropertyValueFactory<Medicament,LocalDate>("date_modif"));
        image_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("img_medicament"));
        
        tab_medicament.setItems(medicaments); 
    }

    @FXML
    private void exportExcel(ActionEvent event){
        try{
        String query= "Select * From medicament";
        PreparedStatement pst =MyConnection.getInstance().getCnx().prepareStatement(query);
        ResultSet rs = pst.executeQuery();
       
        XSSFWorkbook  wb = new XSSFWorkbook();
        XSSFSheet sheet = wb.createSheet("Medicament details");
        XSSFRow header = sheet.createRow(0);
        header.createCell(0).setCellValue("id");
        header.createCell(1).setCellValue("nom_medicament");
        header.createCell(2).setCellValue("descmedicament");
        header.createCell(3).setCellValue("date_modif");
        header.createCell(4).setCellValue("dispo");
        
          int index =1;
          while(rs.next()) {
             XSSFRow row = sheet.createRow(index);
             row.createCell(0).setCellValue(rs.getInt("id"));
             row.createCell(1).setCellValue(rs.getString("nom_medicament"));
             row.createCell(2).setCellValue(rs.getString("descmedicament"));
             row.createCell(3).setCellValue(rs.getDate("date_modif").toString());
             row.createCell(4).setCellValue(rs.getString("dispo"));
             
             
             index++;
          }
          FileOutputStream fileOut = new FileOutputStream("MedicamentDetails.xlsx");
          wb.write(fileOut);
          fileOut.close();
         
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Votre document Excel a ete créé !");
        alert.showAndWait();
       
       
        rs.close();
        }
        catch (SQLException | FileNotFoundException ex){
            Logger.getLogger(GestionMedicamentBackController.class.getName()).log(Level.SEVERE, null, ex);
        } catch (IOException ex) {
            Logger.getLogger(GestionMedicamentBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoiAccueil(ActionEvent event) {
          try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("HomepageFrontPhar.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            HomepageFrontPharController dpc = loader.getController();

            btn_accueil.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void exportPDF(ActionEvent event) throws SQLException {
         try {
                Class.forName("com.mysql.jdbc.Driver");
                Connection con =  MyConnection.getInstance().getCnx();
                Statement stmt = con.createStatement();
                    /* Define the SQL query */
                    ResultSet query_set = stmt.executeQuery("SELECT * From medicament");
                    /* Step-2: Initialize PDF documents - logical objects */
                    Document my_pdf_report = new Document();
                    PdfWriter.getInstance(my_pdf_report, new FileOutputStream("MedicamentDetails.pdf"));
                    my_pdf_report.open();            
                    //we have four columns in our table
                    PdfPTable my_report_table = new PdfPTable(4);
                    //create a cell object
                    PdfPCell table_cell;
                       my_report_table.addCell("Nom Médicament");
                       my_report_table.addCell("Description Medicament");
                       my_report_table.addCell("Date de modification");
                       my_report_table.addCell("Disponibilité");

                    while (query_set.next()) {  
                                    String id = query_set.getString("nom_medicament");
                                    table_cell=new PdfPCell(new Phrase(id));
                                    my_report_table.addCell(table_cell);
  
                                    String Contenu=query_set.getString("descmedicament");
                                    table_cell=new PdfPCell(new Phrase(Contenu));
                                    my_report_table.addCell(table_cell);
                                   
                                    String date=query_set.getDate("date_modif").toString();
                                    table_cell=new PdfPCell(new Phrase(date));
                                    my_report_table.addCell(table_cell);
                                    
                                    String medicament=query_set.getString("dispo").toString();
                                    table_cell=new PdfPCell(new Phrase(medicament));
                                    my_report_table.addCell(table_cell);
                                    }
                    /* Attach report table to PDF */
                    my_pdf_report.add(my_report_table);                      
                    my_pdf_report.close();
                    /* Close all DB related objects */
                    query_set.close();
                    stmt.close();
                        

    } catch (FileNotFoundException e) {
    e.printStackTrace();
    } catch (DocumentException e) {
    e.printStackTrace();
    }catch (ClassNotFoundException ex) {
            Logger.getLogger(GestionOrdonnanceBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
        Alert alert = new Alert(Alert.AlertType.INFORMATION);
        alert.setTitle("Information Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Medicament Details Exported To Pdf");
        alert.showAndWait();
   
    }

    @FXML
    private void ControlDatePicker(MouseEvent event) {
        if (!(tf_date_modif.isEditable())){
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Confirmation Dialog");
        alert.setHeaderText(null);
        alert.setContentText("Voulez vous changer la date du systeme ?");

        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == ButtonType.OK){
            tf_date_modif.setEditable(true);
       } else {
            tf_date_modif.setEditable(false);
       }    
    }   
    }

    @FXML
    private void uploadImage(ActionEvent event) throws ProtocolException, IOException {
        FileChooser.ExtensionFilter imageFilter
        = new FileChooser.ExtensionFilter("Image Files", "*.jpg", "*.png" , "*.gif");
        FileChooser fileChooser = new FileChooser();
        fileChooser.getExtensionFilters().add(imageFilter);
                
        file = fileChooser.showOpenDialog(null);
        if (file != null) {
            try {
                BufferedImage bufferedImage = ImageIO.read(file);
                WritableImage image = SwingFXUtils.toFXImage(bufferedImage, null);
                //imagev.setImage(image);
                } catch (IOException ex) {
               // Logger.getLogger(JavaFXPixel.class.getName()).log(Level.SEVERE, null, ex);
                }
                String img=file.getAbsolutePath().substring(file.getAbsolutePath().lastIndexOf("\\")+1);
                this.tf_image.setText("C:\\wamp64\\www\\PIJAVA\\uploads\\"+img );
                }
                FileUploader fu = new FileUploader("http://localhost/PIJAVA/");
                String fileNameInServer = fu.upload(file.getAbsolutePath());
                
        }

    @FXML
    private void triMedicament(ActionEvent event) {
        MedicamentService Mc=new MedicamentService();
        String methode = methodeTri.getValue();
        String methode2 = "";
        if (check_methodeTri.isSelected())
        {
             methode2 ="ASC";
        }
        else
        {
             methode2 ="DESC";
        }
        ObservableList<Medicament> medicaments = Mc.triMedicament(methode,methode2);
        id_col.setCellValueFactory(new PropertyValueFactory<Medicament,Integer>("id"));
        nom_medicament_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("nom_medicament"));
        descmedicament_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("descmedicament"));
        dispo_col.setCellValueFactory(new PropertyValueFactory<Medicament,Integer>("dispo"));
        date_modif_col.setCellValueFactory(new PropertyValueFactory<Medicament,LocalDate>("date_modif"));
        image_col.setCellValueFactory(new PropertyValueFactory<Medicament,String>("img_medicament"));
        
        tab_medicament.setItems(medicaments);
    }

    @FXML
    private void sedeconnecter(ActionEvent event) {
         Session.getSession().clearSession();
        try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            bt_exportPDF.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
}  
