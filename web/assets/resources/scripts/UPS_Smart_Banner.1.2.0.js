"iOS"==getMobileOperatingSystem()?document.write('<meta name="apple-itunes-app" content="app-id=336377331">'):"Android"==getMobileOperatingSystem()&&document.write('<link rel="manifest" href="assets/resources/.well-known/manifest.json">');function getMobileOperatingSystem(){var userAgent=navigator.userAgent||navigator.vendor||window.opera;return/windows phone/i.test(userAgent)?"Windows Phone":/android/i.test(userAgent)?"Android":/iPad|iPhone|iPod/.test(userAgent)&&!window.MSStream?"iOS":"unknown"}