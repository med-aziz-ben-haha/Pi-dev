/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

import java.util.Objects;

/**
 *
 * @author LENOVO
 */
public class CaptchaSoin {
    
    public int id ; 
    public String value;
    public String lien_image_captcha;

    @Override
    public int hashCode() {
        int hash = 3;
        hash = 23 * hash + this.id;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final CaptchaSoin other = (CaptchaSoin) obj;
        if (this.id != other.id) {
            return false;
        }
        if (!Objects.equals(this.value, other.value)) {
            return false;
        }
        if (!Objects.equals(this.lien_image_captcha, other.lien_image_captcha)) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "CaptchaSoin{" + "id=" + id + ", value=" + value + ", lien_image_captcha=" + lien_image_captcha + '}';
    }

    public CaptchaSoin(String value, String lien_image_captcha) {
        this.value = value;
        this.lien_image_captcha = lien_image_captcha;
    }

    public CaptchaSoin() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getValue() {
        return value;
    }

    public void setValue(String value) {
        this.value = value;
    }

    public String getLien_image_captcha() {
        return lien_image_captcha;
    }

    public void setLien_image_captcha(String lien_image_captcha) {
        this.lien_image_captcha = lien_image_captcha;
    }
    
}
