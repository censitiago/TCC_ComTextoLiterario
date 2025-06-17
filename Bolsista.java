/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package coordenador;


/**
 *
 * @author aluno
 */
public  class Bolsista extends Coordenador {
    public static void main(String[] args) {
        public int idbolsista;
        public int idcoordenador;
        public String email;
        public String nome;
        public String senha;

    public Bolsista() {
    }

    public Bolsista(String email, String nome, String senha) {
        this.email = email;
        this.nome = nome;
        this.senha = senha;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getSenha() {
        return senha;
    }

    public void setSenha(String senha) {
        this.senha = senha;
    }

    @Override
    public String toString() {
        return "Bolsista{" + "email=" + email + ", nome=" + nome + ", senha=" + senha + '}';
    }
        
        
    }
}
