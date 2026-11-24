# Home - FUT test data v0.2.0

* [**Table of Contents**](toc.md)
* **Home**

## Home

| | |
| :--- | :--- |
| *Official URL*:http://ehealth.sundhed.dk/testdata/ImplementationGuide/dk.ehealth.sundhed.fhir.ig.testdata | *Version*:0.2.0 |
| Draft as of 2026-11-24 | *Computable Name*:FUTTestData |

### FUT test data

Test data resources for the Danish eHealth Infrastructure. Every resource here is an instance of a profile published in the [eHealth Infrastructure Implementation Guide](http://ehealth.sundhed.dk/fhir) — this guide defines no profiles, extensions, code systems or value sets of its own. Two examples are not test data, but is used by the loader:

* [Loader settings](Parameters-loader-settings.md), a plain `Parameters` resource carrying the anchor date the dates in the data are relative to.
* [Loader code systems](Bundle-loader-codesystems.md), a `Bundle` holding copies of the core IG's `ehealth-system` and `ehealth-program` CodeSystems, copied from the dependency IG. The loader checks the coexistence tags and programmes against them, and adds to terminology any code it lacks.

See [Shared definitions](shared.md) for what every patient and vendor shares, [Vendors](vendors.md) for the care team and practitioner of each, and [Patient data](patients.md) for what is recorded per patient.

#### What is here

Data representing a scenario covering 10 patients with a COPD condition. The patients are enrolled in episodes of care and has been assigned a plan for COPD monitoring. The COPD monitoring plan schedules observations for oxygen saturation and pulse, and a symptom questionnaire. The plans are assigned to a care team with a single practitioner as participant. Some data can be shared across vendor solutions, while others are labeled with a coexistence tag which reserves the data for use with the corresponding system vendor. The scenario carries a placeholder value for the coexistence tag and the corresponding ehealth program code, and the placeholders are substituted when the data is loaded on a specific environment. The vendor specific part of the scenario is duplicated across coexistence tag values when loaded. This guide publishes one copy of it, carrying the placeholder tag.

#### Loading

The example data is loaded on the development test environment (DEVENVCGI), after its clinical data has been cleared. Data already present is not created again, and the ClinicalImpressions and Tasks are created by triage rather than loaded. See [Loading](loading.md) for what a run removes, keeps and loads.

#### Placeholders

Values written as `${...}` are substituted by the loader at load time.

**Environment values** — these belong to the deployment, not to the test data. Both take a code from a code system the core IG defines, and [Loader code systems](Bundle-loader-codesystems.md) carries a copy of each:

* `${EHEALTH_PROGRAM}` — the programme the care team works under. The plan and its activities do not carry it: a definition is not programme-specific. Codes: [eHealth Program](http://ehealth.sundhed.dk/fhir/CodeSystem-ehealth-program.html)
* `${COEXISTENCE_TAG}` — the coexistence tag in `meta.tag`, marking which deployment owns the record. Carried by the patient-specific resources only; the definitions do not have it. Codes: [eHealth System](http://ehealth.sundhed.dk/fhir/CodeSystem-ehealth-system.html)

**Identifiers** — each under the naming system its resource type uses:

* `${CARETEAM_UUID}` — the care team the scenario runs under, written `urn:uuid:${CARETEAM_UUID}` under `urn:ietf:rfc:3986`, which has to be a full URI.
* `${PRACTITIONER_IDENTIFIER}` — the practitioner on that team, an LDAP uid.
* `${SUBMISSION_UUID}` — the identifier of an Observation or QuestionnaireResponse, a bare UUID under [eHealth Identifier](http://ehealth.sundhed.dk/fhir/NamingSystem-ehealth-identifier.html). **One value per resource, not one for all of them.** The identifier is normally assigned by the submit operation, but the loader derives a UUIDv5 from the resource and the coexistence tag it is being copied for, so the same input always produces the same identifier and loading twice creates nothing the second time.

