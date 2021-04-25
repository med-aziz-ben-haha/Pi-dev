/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.iservices;

import SahtiTN.entities.specialitelabo;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author oussama
 */
public interface iservicespecialitelabo<T> {
    public void AjouterSpeciliteLabo(T t);
     public void supprimerSpeciliteLabo(T t);
     public void updateSpeciliteLabo(T t);
     public List<T> displaySpeciliteLabo();
    
    
}
