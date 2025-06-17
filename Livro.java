/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package coordenador;

import java.util.Date;
import org.w3c.dom.Text;

/**
 *
 * @author aluno
 */
public class Livro extends Coordenador{
    public static void main(String[] args) {
        public int idbolsista;
        public int idlivro;
        public int idcoordenador;
        public String titulo;
        public String genero;
        public String autor;
        public Text resumo;
        public String capa;
        public String pdf;
        public Date data_cadastro;

    public Livro() {
    }

    public Livro(String titulo, String genero, String autor, Text resumo, String capa, String pdf, Date data_cadastro) {
        this.titulo = titulo;
        this.genero = genero;
        this.autor = autor;
        this.resumo = resumo;
        this.capa = capa;
        this.pdf = pdf;
        this.data_cadastro = data_cadastro;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    public String getGenero() {
        return genero;
    }

    public void setGenero(String genero) {
        this.genero = genero;
    }

    public String getAutor() {
        return autor;
    }

    public void setAutor(String autor) {
        this.autor = autor;
    }

    public Text getResumo() {
        return resumo;
    }

    public void setResumo(Text resumo) {
        this.resumo = resumo;
    }

    public String getCapa() {
        return capa;
    }

    public void setCapa(String capa) {
        this.capa = capa;
    }

    public String getPdf() {
        return pdf;
    }

    public void setPdf(String pdf) {
        this.pdf = pdf;
    }

    public Date getData_cadastro() {
        return data_cadastro;
    }

    public void setData_cadastro(Date data_cadastro) {
        this.data_cadastro = data_cadastro;
    }

    @Override
    public String toString() {
        return "Livro{" + "titulo=" + titulo + ", genero=" + genero + ", autor=" + autor + ", resumo=" + resumo + ", capa=" + capa + ", pdf=" + pdf + ", data_cadastro=" + data_cadastro + '}';
    }
        
        
        
        
        
        
        
    }
    
    
}
