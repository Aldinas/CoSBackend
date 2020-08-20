pipeline {
        triggers {
            pollSCM('H/5 * * * *')
        }
        agent {any}
    stages {
        stage('Test') {
            agent {
                dockerfile {
                    filename 'dockerfile.dev'
                }
            }
            steps {
                sh 'php --version'
                sh 'composer --version'
                sh 'hostname'
            }
        }
        stage('Production') {
            steps {
                sh 'php --version'
                sh 'composer --version'
                sh 'hostname'
            }
        }
    }
}
