pipeline {
    agent {
        dockerfile {
            filename 'dockerfile.dev'
        }
    }
    stages {
        stage('Test') {
            steps {
                sh 'php --version'
                sh 'composer --version'
            }
        }
    }
}
