pipeline {
    agent any
    environment {
        // Se extrae el secret key y se asigna a una variable
        ROOT_PASSWORD = credentials('mariadb-secret')
    }
    stages {
        stage('Limpieza') {
            steps {
                sh 'docker compose down --remove-orphans'
            }
        }
        stage('Despliegue seguro') {
            steps {
                sh 'docker compose up --build -d'
            }
        }
    }
}
