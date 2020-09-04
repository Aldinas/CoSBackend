pipeline {
        triggers {
            pollSCM('H/5 * * * *')
        }
        agent none
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
                sh 'php artisan migrate --seed'
                script {
                    def response = sh(script: 'curl http://localhost/endlessrunner/score', returnStdout: true)
                }
                echo response;
            }
        }
        // stage('Production') {
        //     steps {
        //         sh 'php --version'
        //         sh 'composer --version'
        //         sh 'hostname'
        //     }
        // }
    }
}
