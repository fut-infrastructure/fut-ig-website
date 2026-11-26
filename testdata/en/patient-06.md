# Patient 06 - eHealth Infrastructure Test Data v1.0.0

* [**Table of Contents**](toc.md)
* [**Patient data**](patients.md)
* **Patient 06**

## Patient 06

The resources recorded for [Patient 06](Patient-p06.md).

### Base.Management

The episode of care the plan is delivered under, and that every record of care refers back to.

#### EpisodeOfCares

The episode everything patient-specific hangs off: the plan is delivered under it, and every measurement and response refers back to it.

| | |
| :--- | :--- |
| [Episode of care 1 (completed)](EpisodeOfCare-p06-eoc1.md) | A completed episode of care, addressing the COPD diagnosis. |
| [Episode of care 2 (active)](EpisodeOfCare-p06-eoc2.md) | An open episode of care, addressing the COPD diagnosis. |

### Clinical.Care Provision

The plan as delivered to the patient: the care plan, the service requests it consists of, and the care team responsible.

#### CarePlans

The plan definition as delivered to the patient, one per episode. Normally created by $apply, which would also create one ServiceRequest per activity.

| | |
| :--- | :--- |
| [Care plan 1 (completed)](CarePlan-p06-cp1.md) | The monitoring plan as delivered under episode of care 1. |
| [Care plan 2 (active)](CarePlan-p06-cp2.md) | The monitoring plan as delivered under episode of care 2. |

#### ServiceRequests

One per activity of a care plan, created by $apply alongside it. A measurement or questionnaire response is submitted against one of these, and the measurement ones carry the reference ranges triage compares a value against.

| | |
| :--- | :--- |
| [Closing (scheduled) — completed](ServiceRequest-p06-cp1-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [Head activity (extra) — completed](ServiceRequest-p06-cp1-sr-extra-head.md) | The container for the unscheduled branch. |
| [Pulse (extra) — completed](ServiceRequest-p06-cp1-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [Questionnaire (extra) — completed](ServiceRequest-p06-cp1-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [Saturation and pulse device group (extra) — completed](ServiceRequest-p06-cp1-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [Oxygen saturation (extra) — completed](ServiceRequest-p06-cp1-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [Head activity (scheduled) — completed](ServiceRequest-p06-cp1-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [Introduction (scheduled) — completed](ServiceRequest-p06-cp1-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [Pulse (scheduled) — completed](ServiceRequest-p06-cp1-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [Questionnaire (scheduled) — completed](ServiceRequest-p06-cp1-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [Saturation and pulse device group (scheduled) — completed](ServiceRequest-p06-cp1-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [Saturation and pulse introduction (scheduled) — completed](ServiceRequest-p06-cp1-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [Saturation and pulse preparation (scheduled) — completed](ServiceRequest-p06-cp1-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [Oxygen saturation (scheduled) — completed](ServiceRequest-p06-cp1-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |
| [Closing (scheduled)](ServiceRequest-p06-cp2-sr-closing.md) | Guidance screen shown after the scheduled round is complete. |
| [Head activity (extra)](ServiceRequest-p06-cp2-sr-extra-head.md) | The container for the unscheduled branch. |
| [Pulse (extra)](ServiceRequest-p06-cp2-sr-extra-pulse.md) | The unscheduled pulse measurement, with the same four absolute reference ranges as the scheduled one. |
| [Questionnaire (extra)](ServiceRequest-p06-cp2-sr-extra-questionnaire.md) | The unscheduled symptom questionnaire. This is the request a test questionnaire response is most easily submitted against, since it is not bound to a window. |
| [Saturation and pulse device group (extra)](ServiceRequest-p06-cp2-sr-extra-sat-pulse.md) | Groups the unscheduled saturation and pulse measurements as one device group. |
| [Oxygen saturation (extra)](ServiceRequest-p06-cp2-sr-extra-saturation.md) | The unscheduled oxygen saturation measurement, with the same absolute reference ranges as the scheduled one. A submission against this request can be made at any time. |
| [Head activity (scheduled)](ServiceRequest-p06-cp2-sr-head.md) | The container for the scheduled branch. Nothing is submitted against it; it groups the activities below. |
| [Introduction (scheduled)](ServiceRequest-p06-cp2-sr-intro.md) | Guidance screen shown at the start of the scheduled measurement round. |
| [Pulse (scheduled)](ServiceRequest-p06-cp2-sr-pulse.md) | The scheduled pulse measurement. Carries four absolute reference ranges, so both a low and a high value triage red: red at or below 50/min and at or above 130/min, yellow in between. |
| [Questionnaire (scheduled)](ServiceRequest-p06-cp2-sr-questionnaire.md) | The scheduled symptom questionnaire. A questionnaire response is submitted against this request and triaged on its answer significance. |
| [Saturation and pulse device group (scheduled)](ServiceRequest-p06-cp2-sr-sat-pulse.md) | Groups the saturation and pulse measurements as one device group, so both are taken from the same device in one go. |
| [Saturation and pulse introduction (scheduled)](ServiceRequest-p06-cp2-sr-sat-pulse-intro.md) | Guidance screen introducing the saturation and pulse measurements. |
| [Saturation and pulse preparation (scheduled)](ServiceRequest-p06-cp2-sr-sat-pulse-prep.md) | Guidance screen telling the patient how to prepare before measuring. |
| [Oxygen saturation (scheduled)](ServiceRequest-p06-cp2-sr-saturation.md) | The scheduled oxygen saturation measurement. Carries the absolute reference ranges its triage rule compares a submitted value against: red at or below 85%, yellow from 85% to 88%. |

### Clinical.Diagnostics

What the patient submitted: the measurements and the questionnaire responses.

#### Observations

The measurements submitted, two per submission. Their values are chosen to produce a known triage colour against the reference ranges they carry.

| | |
| :--- | :--- |
| [Pulse 72/min (completed episode)](Observation-p06-cp1-pulse.md) | Pulse submitted against the unscheduled branch of the completed episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [Oxygen saturation 96% (completed episode)](Observation-p06-cp1-sat.md) | Oxygen saturation submitted against the unscheduled branch of the completed episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |
| [Pulse 72/min (open episode)](Observation-p06-cp2-pulse.md) | Pulse submitted against the unscheduled branch of the open episode's care plan. 72/min falls between the low and high ranges, so triage returns green and the resulting task is routine. |
| [Oxygen saturation 96% (open episode)](Observation-p06-cp2-sat.md) | Oxygen saturation submitted against the unscheduled branch of the open episode's care plan. 96% is above every absolute range, so triage returns green and the resulting task is routine. |

#### QuestionnaireResponses

The questionnaire answered as part of each submission. The answers are chosen to produce a known triage colour through the answer significance the questionnaire defines.

| | |
| :--- | :--- |
| [Questionnaire response, mild symptoms (completed episode)](QuestionnaireResponse-p06-cp1-qr.md) | A symptom questionnaire answered under the completed episode. 4 scored answers — 3 yellow, 1 green — so triage returns yellow and the resulting task is urgent. |
| [Questionnaire response, no symptoms (open episode)](QuestionnaireResponse-p06-cp2-qr.md) | A symptom questionnaire answered under the open episode. 4 scored answers — 4 green — so triage returns green and the resulting task is routine. |

### Clinical.Summary

The clinical record: the diagnosis each episode addresses, and the triage result of each submission. The impressions are not loaded — automated processing creates them, and the ones here record what it should produce.

#### Conditions

The diagnosis the episode addresses, and the reason the plan is in place.

| | |
| :--- | :--- |
| [Chronic obstructive pulmonary disease (episode 1)](Condition-p06-eoc1-cond.md) | The COPD diagnosis episode of care 1 addresses and the monitoring plan responds to. |
| [Chronic obstructive pulmonary disease (episode 2)](Condition-p06-eoc2-cond.md) | The COPD diagnosis episode of care 2 addresses and the monitoring plan responds to. |

#### ClinicalImpressions

The triage result for each submitted resource. NOT loaded — automated processing creates these, and the ones here record what it should produce.

| | |
| :--- | :--- |
| [Triage of pulse 72/min — green](ClinicalImpression-p06-cp1-ci-pulse.md) | Triage result for the pulse submitted under the completed episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [Triage of the questionnaire response — yellow](ClinicalImpression-p06-cp1-ci-qr.md) | Triage result for the questionnaire response submitted under the completed episode. 4 scored answers — 3 yellow, 1 green — so the overall assessment is yellow. Carries no description: the questionnaire rule does not set one. |
| [Triage of saturation 96% — green](ClinicalImpression-p06-cp1-ci-sat.md) | Triage result for the saturation submitted under the completed episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |
| [Triage of pulse 72/min — green](ClinicalImpression-p06-cp2-ci-pulse.md) | Triage result for the pulse submitted under the open episode. 72/min falls between the low and high alarm ranges, so the finding is 'within reference range' and the overall assessment green. |
| [Triage of the questionnaire response — green](ClinicalImpression-p06-cp2-ci-qr.md) | Triage result for the questionnaire response submitted under the open episode. 4 scored answers — 4 green — so the overall assessment is green. Carries no description: the questionnaire rule does not set one. |
| [Triage of saturation 96% — green](ClinicalImpression-p06-cp2-ci-sat.md) | Triage result for the saturation submitted under the open episode. 96% is within every absolute range, so the finding is 'within reference range' and the overall assessment green. |

### Foundation.Security

One Provenance per submission, naming the resources submitted together. This is what triggers automated processing.

#### Provenances

One per submission, naming the resources submitted together. This is what triggers automated processing, so triage runs because one of these appeared.

| | |
| :--- | :--- |
| [Submission under the completed episode](Provenance-p06-cp1-prov.md) | The submit record for the completed episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |
| [Submission under the open episode](Provenance-p06-cp2-prov.md) | The submit record for the open episode: one questionnaire response and two observations, submitted together against the unscheduled branch. This is what triggers automated processing, which should triage all three green with routine tasks. |

### Base.Workflow

The assessment task raised with each triage result. Not loaded either, and its priority is the triage colour.

#### Tasks

The assessment task raised with each triage result. NOT loaded either; its priority is the triage colour, so red gives asap and yellow urgent.

| | |
| :--- | :--- |
| [Assess pulse triage — routine](Task-p06-cp1-task-pulse.md) | Task for the green pulse result under the completed episode. Priority routine, because triage returned green. |
| [Evaluate questionnaire response triage — urgent](Task-p06-cp1-task-qr.md) | Task for the green questionnaire result under the completed episode. Carries the questionnaire wording rather than the measurement wording. |
| [Assess saturation triage — routine](Task-p06-cp1-task-sat.md) | Task for the green saturation result under the completed episode. Priority routine, because triage returned green. |
| [Assess pulse triage — routine](Task-p06-cp2-task-pulse.md) | Task for the green pulse result under the open episode. Priority routine, because triage returned green. |
| [Evaluate questionnaire response triage — routine](Task-p06-cp2-task-qr.md) | Task for the green questionnaire result under the open episode. Carries the questionnaire wording rather than the measurement wording. |
| [Assess saturation triage — routine](Task-p06-cp2-task-sat.md) | Task for the green saturation result under the open episode. Priority routine, because triage returned green. |

