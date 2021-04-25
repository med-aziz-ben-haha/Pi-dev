/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.iservices;

import java.util.List;
import SahtiTN.entities.labo;
import SahtiTN.entities.specialitelabo;
import javafx.collections.ObservableList;

/**
 *
 * @author oussama
 */
public interface iservicelabo<T>{
     public void AjouterLabo(T t);
     public void supprimerLabo(T t);
     public void updateLabo(T t);
     public List<T> displayLabo();
     //public void updateCombo();
}
