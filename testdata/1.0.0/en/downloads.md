# Downloads - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* **Downloads**

## Downloads

The IG Publisher packages every resource in this guide. The test data loader takes the JSON examples: that archive holds the resources themselves, one file per resource, exactly as they appear on this site. See [Loading](loading.md) for what the loader does with it on DEVENVCGI.

### The test data

* [Examples, JSON](examples.json.zip) — every resource in this guide as JSON
* [Examples, XML](examples.xml.zip) — the same resources as XML

Both archives contain all of it: the shared definitions, the patients, their episodes of care with care plans and conditions each, and the service requests, submissions and triage results.

**Read this before loading any of it.** The archives are the resources as published, which is not the same as the resources as loadable. A special loader component is used to substitute placeholders, rewrite canonicals, and duplicate scenario for each vendor:

* The `${…}` values are placeholders, not data. The programme code, the coexistence tag, the care team's UUID, the practitioner's identifier and the identifier on every submitted Observation and QuestionnaireResponse have to be substituted for the target environment. The submission identifiers take a different value in each resource, unlike the rest.
* Canonical references point at this guide, as `http://ehealth.sundhed.dk/testdata/<Type>/<id>`. They have to be rewritten to the target, and they are plain strings rather than `reference` objects.
* The ClinicalImpressions and Tasks are expected results, not input. Automated processing creates its own when a Provenance triggers it; these exist to be compared against.
* Note that `meta.lastUpdated` is stamped from the wall clock at load time.

### Definitions and the package

* [Definitions, JSON](definitions.json.zip) — the ImplementationGuide resource and the conformance resources, without the examples
* [NPM package](package.tgz) — this guide as a FHIR package, for use as a dependency
* [The whole site](full-ig.zip) — every page and every artefact, for browsing offline

### Upstream

* [FHIR R4 downloads](https://hl7.org/fhir/R4/downloads.html) — tools, frameworks and libraries
* [eHealth Infrastructure Implementation Guide](http://ehealth.sundhed.dk/fhir) — the core guide this one depends on, which defines every profile used here

