<!DOCTYPE html>
<html lang="en">

<head>
    <title>XSS Prevention</title>
    <!-- Dependencies -->
    <?php include 'header.php';?>
</head>

<body>
    <br>
    <div class="container-fluid">
        <div class="row" style="text-align:center;">
            <div class="col-md-8 col-md-offset-2">
                <h1>XSS Prevention</h1>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <h2>Input Validation</h2>
                <h3>Whitelisting</h3>
                Restrict user input to only an approved list of characters that are necessary for the specified input. For example, a zip code only requires a user to input digits from 0-9. There is no reason for any special characters like a &lt; or a " to be allowed in the input. The text box itself can limit the input or the code can just strip anything that isn't a digit from 0-9 when the user submits.
                <h3>Blacklisting</h3>
                Blacklisting compares the user input with a list of untrusted inputs. For example, not allowing any text coming in containing the script tag. This shouldn't be relied upon as the main form of validation becuase there can be always something not accounted for on the list that is malicious.
            </div>
            <div class="row">
                <h2>HTML Entity Encoding</h2>
                There are some characters that can be used to manipulate a html page, like &lt; &gt; or ' that need to be encoded so that they aren't interpreted as the browser as code. This is done by using HTML character entities. For example, &lt; should be encoded as &amp;lt; and &gt; should be encoded by &amp;gt; This helps to prevent users entering in malicious code that would be executed by the browser because the browser can't tell the different between the actual code on the website and what the user injected.
                <h3>Javascript/CSS Escaping</h3>
                If the code makes the user have some sort of input that results in it being put in Javascript or CSS code, the input must be escaped. Escaping is the encoding of special characters so the submission isn't interpreted as code.
            </div>
            <div class="row">
                <h2>Accounting for All Untrusted Data on the Site</h2>
                The most important thing in preventing cross site scripting is making sure all untrusted data that is coming into the site is handled properly. Any data that the user inputs should be considered to be untrusted data, as the developer should assume someone not using their site in an unintended way. Having one place on a site that doesn't properly format untrusted data can lead to the website being compromised by an XSS attack.
            </div>
            <div class="row">
                <h2>Content Security Policy</h2>
                Having a Content Security Policy adds another level of security onto a website for users. This allows the developer to control what resources are being loaded onto the page and where they originate from. This is a type of whitelisting as only allowing resources from trusted pages or just restricting to running scripts from the site itself can eliminate malicious code from being injected into the site.
            </div>
            <div class="row">
                <h2>Using XSS prevention libraries</h2>
                There are many code libraries built to help developers in defending against XSS, though these libraries shouldn't be relied upon solely as the only defense.
                <br>
                <br>
            </div>
            <div class="row">
                <h2>External Resources</h2>
                <a href="https://www.youtube.com/watch?v=UnSJ89zGkEs">In-Depth Video on XSS defense</a>
                <br>
                <a href="https://www.youtube.com/watch?v=_jubb3g1HVg">XSS Defense Video by Jeremy Stashewsky</a>
                <br>
                <a href="https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet">OWASP XSS Prevention Cheat Sheet</a>
            </div>
        </div>

        <nav>
            <ul class="pager">
                <li><a href="/newscache">Next: Cross Site Scripting Example</a>
                </li>
            </ul>
        </nav>

        <?php include 'footer.php';?>
    </div>
</body>

</html>