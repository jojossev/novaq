# Novaq Android WebView wrapper

Minimal APK that loads the Novaq eShop web app in a full-screen WebView.

## Requirements

- Android SDK (`ANDROID_HOME` or `local.properties` → `sdk.dir`)
- JDK 17+ (Android Studio JBR works: `C:\Program Files\Android\Android Studio\jbr`)

## Set your shop URL

The PHP app uses dynamic `APP_URL` from the server; set your production URL before building:

**Option A — `gradle.properties`:**

```properties
loadUrl=https://your-production-domain.com/
```

**Option B — command line:**

```bash
./gradlew assembleDebug -PloadUrl=https://your-production-domain.com/
```

## Build debug APK

```powershell
$env:JAVA_HOME = "C:\Program Files\Android\Android Studio\jbr"
$env:ANDROID_HOME = "$env:LOCALAPPDATA\Android\Sdk"
cd android
.\gradlew.bat assembleDebug
```

APK output: `app/build/outputs/apk/debug/app-debug.apk`

## Build release APK (unsigned)

```powershell
.\gradlew.bat assembleRelease
```

Output: `app/build/outputs/apk/release/app-release-unsigned.apk`
