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
                script {
                    def response = sh(script: 'curl http://localhost:8081/endlessrunner/score', returnStdout: true)
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
